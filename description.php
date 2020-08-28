<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    .row {
        margin-top: 2%;
    }
</style>
<title>Stock Market Simulator</title>
<head>
<body>
<div class = "countainer">
<?php include_once 'navbar.php'; ?>
<div class = "row text-center">
    <div class = "col-md-12">
        <h1>Algorithms</h1>
    </div>
</div>
<div class = "row">
    <div class = "col-md-8 jumbotron mx-auto d-block">
        <h5 class = "text-center">Trend Analysis</h5>
        <p>We calculate the 50 day and 200 day moving averages. If the 50 day moving average is greater than the 200 day moving average, 
        we buy. If the 50 day moving average is less than the 200 day moving average, we sell. The idea of this algorithm is to buy
        during upwards trends and sell during downwards trends.</p>
    </div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>