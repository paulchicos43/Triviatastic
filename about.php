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

<div class = "container-fluid">
    <div class = "row text-center" style = "margin-top:2%;">
        <div class = "col-md-12">
            <h1>About</h1>
        </div>
    </div>
    <div class = "row" style = "margin-top: 2%;">
    <div class = "col-md-5 jumbotron" style = "margin-left: 6%;">
        <h3>How do you generate the rankings?</h3>
        <p>We use the Elo competition rating system. The competition we are judging is between the user and the question. If a user answers the question correctly, their rating goes up. If the user answers the question incorrectly, their rating goes down. The leaderboard is constructed by simply comparing user ratings.</p>
        </div>
        <div class = "col-md-5 jumbotron" style = "margin-left: 5%;">
        <h3>Why does this exist?</h3>
        <p>Because The Office is amazing.</p>
        </div>

    </div>
    <div class = "row" style = "margin-top: 2%;">
    <div class = "col-md-5 jumbotron" style = "margin-left: 6%;">
        <h3>What if some questions are harder than others?</h3>
        <p>Questions are also assigned Elo ratings. If a lot of people get a question right, that question will be lower rated because it's easier. Conversely, if a lot of people get a question wrong, that question will be higher rated because it's harder.</p>
        </div>
        <div class = "col-md-5 jumbotron" style = "margin-left: 5%;">
        <h3>Where else is Elo used?</h3>
        <p>It is commonly used to estimate win probabilities in Basketball, Baseball, and Chess.</p>
        </div>

    </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
