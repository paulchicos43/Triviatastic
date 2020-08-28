<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>The Office Trivia</title>
</head>
<body>
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
<div class = "row" style = "margin-top: 2%; margin-bottom: 2%;">
    <div class = "col-md-12 text-center">
        <h1>Rankings</h1>
    </div>
</div>
<?php
$user = 'root';
$pass = '';
$conn = new mysqli('localhost', $user, $pass, 'users') or die("Error");
$result = mysqli_query($conn, "SELECT Name, Rating FROM users ORDER BY Rating DESC;");
$counter = 1;
while($row = mysqli_fetch_assoc($result)){
    echo '
    <div class = "row">
        <div class = "col-md-6 jumbotron mx-auto d-block">
        <h3>';
        echo $counter;
        echo ') ';
        echo htmlspecialchars($row["Name"]);
        echo ', ';
        echo $row["Rating"].'</h3>
        </div>
    </div>';
$counter++;
}



?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>