<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.form {
    margin: auto;
    width: 400px;
}
</style>
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
<div class = "container-fluid">
    <div class = "row" style = "margin-top: 2%;">
        <div class = "col-md-12 text-center">
            <h1>Pick a Nickname</h1>
            <h5>First, enter a nickname and pin. If you've used a nickname before, you can enter your old nickname and pin.</h5>
        </div>
    </div>
    <div class = "row" style = "margin-top: 3%;">
        <div class = "col-md-12">

            <form action = "trivia.php" method = "post" style = "width: 40%;" class = "mx-auto d-block">
                <label for = "nickname">Enter a nickname (max thirteen characters):</label>
                <input type = "text" id = "nickname" name = "nickname" placeholder = "Michael Scott" class = "form-control" required = "required" maxlength = "13">
                <label for = "pin">Enter a pin (four digits):</label>
                <input type = "password" id = "pin" name = "pin" placeholder = "9622" required = "required" class = "form-control" minlength = "4" maxlength = "4">
                <br>
                <input type = "submit" id = "submit" name = "submit" class = "form-control btn-primary">
            </form>
        </div>


    </div>
    <div class = "row">
        <div class = "col-md-12 text-center" style = "margin-top: 5%; margin-bottom: 6%;">
            <img src = "./images/drew.png" class = "img-fluid rounded" style = "width: 50%;">
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>