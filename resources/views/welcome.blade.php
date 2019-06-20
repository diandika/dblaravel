<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Laravel MongoDB CRUD Tutorial With Example</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{url('select')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="query">Query</label>
                <label for="query_type">
                    <select name="query_type" id="query_type" class="form-control">
                        <option value="select">Select</option>
                        <option value="update">Update</option>
                        <option value="delete">Delete</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="tabel">Tabel</label><br>
                <label>
                    <input type="checkbox" name="tabel" value="id">
                </label>id<br>
                <label>
                    <input type="checkbox" name="tabel" value="name">
                </label>name<br>
                <label>
                    <input type="checkbox" name="tabel" value="hero_name">
                </label>hero_name<br>
                <label>
                    <input type="checkbox" name="tabel" value="debut">
                </label>debut<br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="condition">Where:</label>
                <label>
                    <input type="text" class="form-control" name="name">
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
</div>
</body>
</html>
