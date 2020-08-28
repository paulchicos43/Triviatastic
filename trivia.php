<!doctype html>
<html lang = "en">
<head>
<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
button {
    margin-bottom: 3%;
    display: inline-block;
    vertical-align: top;
}
</style>
<title>The Office Trivia</title>
</head>
<body>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<?php
$user = 'root';
$pass = '';
$qdbname = 'questions';
$questions = new mysqli('localhost', $user, $pass, $qdbname) or die();
$udbname = 'users';
$users = new mysqli('localhost', $user, $pass, $udbname) or die();

if(isset($_POST['option'])){
    $arr = explode('/', $_POST['option']);
    $result = mysqli_query($questions, "SELECT * FROM questions WHERE ID = '$arr[1]';");
    $question = $result->fetch_assoc();
    $cookie = $_COOKIE['hash'];
    $result = mysqli_query($users, "SELECT * FROM users WHERE Hash = '$cookie';");
    $user = $result->fetch_assoc();
    if($question['Answer'] == $arr[0]){
        $questionRating = $question['Rating'];
        $playerRating = $user['Rating'];
        $adjustedquestion = pow(10,($questionRating / 400));
        $adjustedplayer = pow(10, ($playerRating / 400));
        $expectedquestion = $adjustedquestion / ($adjustedquestion + $adjustedplayer);
        $expectedplayer = $adjustedplayer / ($adjustedquestion + $adjustedplayer);
        $finalquestion = $questionRating + 32 * (0 - $expectedquestion);
        $finalplayer = $playerRating + 32 * (1 - $expectedplayer);
        mysqli_query($users, "UPDATE users SET Rating = '$finalplayer' WHERE Hash = '$cookie';");
        mysqli_query($questions, "UPDATE questions SET Rating = '$finalquestion' WHERE ID = '$arr[1]';");
            
    } else {
        $questionRating = $question['Rating'];
        $playerRating = $user['Rating'];
        $adjustedquestion = pow(10,($questionRating / 400));
        $adjustedplayer = pow(10, ($playerRating / 400));
        $expectedquestion = $adjustedquestion / ($adjustedquestion + $adjustedplayer);
        $expectedplayer = $adjustedplayer / ($adjustedquestion + $adjustedplayer);
        $finalquestion = $questionRating + 32 * (1 - $expectedquestion);
        $finalplayer = $playerRating + 32 * (0 - $expectedplayer);
        mysqli_query($users, "UPDATE users SET Rating = '$finalplayer' WHERE Hash = '$cookie';");
        mysqli_query($questions, "UPDATE questions SET Rating = '$finalquestion' WHERE ID = '$arr[1]';");
    }




}

if(!isset($_COOKIE['hash']) && !isset($_POST['nickname']) && !isset($_POST['pin'])){
    header('Location: ./register.php');
    die();
} elseif(!isset($_COOKIE['hash'])) {
    $holder1 = strval($_POST['nickname']);
    $holder2 = strval(md5($_POST['pin']));
    $sql = "SELECT COUNT(1) FROM users WHERE Name = '$holder1';";
    $result = mysqli_query($users, $sql);
    $arr = $result->fetch_assoc();
    $hash = mysqli_query($users, "SELECT Hash FROM users WHERE Name = '$holder1';");
    $arr2 = $hash->fetch_assoc();

    if(!isset($_COOKIE['hash']) && $arr['COUNT(1)'] == 0){//If cookie is not set and user does not exist in database
    setcookie("hash", md5($_POST['pin']) , time()+2*24*60*60);

    $sql = "INSERT INTO users (`Name`, `Hash`, `Rating`) VALUES ('$holder1', '$holder2', '1200');";
    $result = mysqli_query($users, $sql);
    } elseif ($arr['COUNT(1)'] == 1 && $arr2['Hash'] == $holder2){ //If cookie is not set and user exists in database
        setcookie("hash", md5($_POST['pin']) , time()+2*24*60*60);
    }
    elseif($arr['COUNT(1)'] == 1 && $arr2['Hash'] != $holder2) { //If cookie is not set and user exists and database but password does not match, we send them back to registration to correct.
        header('Location: ./register.php');
        die();
    } else{
    }
}


?>
<nav class = "navbar  navbar-expand-md navbar-dark bg-dark">
            <a class = "navbar-brand" style = "width: 2%;"><img src = "./images/logo.png" style = "width: 100%;"></a>
            <span class = "navbar-text" style = "margin-left: 0px;">The Office Trivia</span>
            <ul class = "navbar-nav" style = "margin-left: 1%;">
            <li class = "nav-item">
                    <a href = "./index.php" class = "nav-link">Home</a>
                </li>
                <li class = "nav-item">
                    <a href = "./about.php" class = "nav-link">About</a>
                </li>
                <li class = "nav-item">
                    <a href = "./trivia.php" class = "nav-link">Trivia</a>
                </li>
                <li class = "nav-item">
                    <a href = "./rankings.php" class = "nav-link">Rankings</a>
                </li>

            </ul>
</nav>

<div class = "container-fluid">
    <div class = "row">
        <div class = "col-md-7 text-right" style = "margin-left: 3.5%; margin-top: 2%;">
            <h1>Trivia Questions</h1>
        </div>
    
        <?php
    if(isset($_POST['option'])){
        if($question['Answer'] == $arr[0]){
        $print = '
        <span class = "badge badge-dafault badge-success" style = "height: 20px; margin-top: 3.5%;">Correct! New rating: '.round($finalplayer).'</span>
    ';
        echo $print;
        unset($_POST['option']);
        } else if ($question['Answer'] != $arr[0]) {
            $print = '
            <span class = "badge badge-dafault badge-danger" style = "height: 20px; margin-top: 3.5%;">Incorrect! New rating: '.round($finalplayer).'</span>
        ';
            echo $print;
        }
    }
    
    ?>
    </div>
        <div class = "col-md-6 jumbotron mx-auto d-block text-center" style = "margin-top: 2%;">
        <h4>
        <?php
            $num = rand(1,10);
            $result = mysqli_query($questions, "SELECT Question FROM questions WHERE ID = '$num';");
            $arr = $result->fetch_assoc();
            echo $arr['Question'];
        ?>
        
        </h4>
        </div>
    </div>
    <div class = "row">
        <div class = "col-md-12 mx-auto d-block">
            <form action = "./trivia.php" method = "POST" class = "mx-auto d-block" style = "width: 30%;">
                <button type = "submit" id = "option" name = "option" value = <?php echo 'A/'.$num; ?> class = "form-control btn-primary">
                <?php
                    $result = mysqli_query($questions, "SELECT A FROM questions WHERE ID = '$num';");
                    $arr = $result->fetch_assoc();
                    echo $arr['A'];
                ?>
                </button>
                <button type = "submit" id = "option" name = "option" value = <?php echo 'B/'.$num;?> class = "form-control btn-primary">
                <?php 
                    $result = mysqli_query($questions, "SELECT B FROM questions WHERE ID = '$num';");
                    $arr = $result->fetch_assoc();
                    echo $arr['B'];
                ?>
                </button>
                <button type = "submit" id = "option" name = "option" value = <?php echo 'C/'.$num; ?> class = "form-control btn-primary">
                <?php 
                    $result = mysqli_query($questions, "SELECT C FROM questions WHERE ID = '$num';");
                    $arr = $result->fetch_assoc();
                    echo $arr['C'];
                ?>
                </button>
                <button type = "submit" id = "option" name = "option" value = <?php echo 'D/'.$num; ?> class = "form-control btn-primary">
                <?php 
                    $result = mysqli_query($questions, "SELECT D FROM questions WHERE ID = '$num';");
                    $arr = $result->fetch_assoc();
                    echo $arr['D'];
                ?>
                </button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>