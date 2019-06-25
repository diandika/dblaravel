<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Moving Object Database</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
@include('header')
<form method="post" action="{{url('select')}}">
    @csrf

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="condition">Delete</label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="condition">From:</label>
            <label>
                <input type="text" class="form-control" name="table">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="condition">Where:</label>
            <label>
                <input type="text" class="form-control" name="condition">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
</body>
</html>
