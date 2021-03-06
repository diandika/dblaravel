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


        <div class="form-group row justify-content-center">
            <label class="col-sm-2 col-form-label">Update</label>
        </div>
        <div class="form-group row justify-content-center">
            <label for="table" class="col-sm-2 col-form-label">Table</label>
            <div>
                <input type="text" class="form-control" name="table">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="set" class="col-sm-2 col-form-label">Set</label>
            <div>
                <input type="text" class="form-control" name="set">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="condition" class="col-sm-2 col-form-label">Where</label>
            <div>
                <input type="text" class="form-control" name="condition">
            </div>
        </div>
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
</form>
</body>
</html>
