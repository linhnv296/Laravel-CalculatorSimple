<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="align-content-center">
<h2 class="font-weight-bold">Laravel Calculator Simple</h2>
<form action="" method="post" class="col-lg-6 col-md-8 col-sm-10 col-xs-12 align-content-center">
    @csrf
    <div class="form-group">
        <label for="Number 1">Number 1</label>
        <input type="number" class="form-control" name="number1">
    </div>
    <div class="form-group">
        <label for="Number 2">Number 2</label>
        <input type="number" class="form-control" name="number2">
    </div>
    <button type="submit" class="btn btn-success" name="addition" value="+">Addtion(+)</button>
    <button type="submit" class="btn btn-primary" name="subtraction" value="-">Subtraction(-)</button>
    <button type="submit" class="btn btn-warning" name="multiplication" value="*">Multiplication(X)</button>
    <button type="submit" class="btn btn-info" name="division" value="/">Division</button>
    <p class="legend-color-guide">Result: @if(isset($result)){{$result}} @endif</p>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>