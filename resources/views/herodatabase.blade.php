<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Hero Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<h1>let's say it works</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Hero</th>
        <th>Debut</th>
    </tr>
    </thead>
    <tbody>
    @foreach($hero as $h)
        {{\Illuminate\Support\Facades\Log::info($h)}}
        <tr>
            <td>{{$h->id}}</td>
            <td>{{$h->name}}</td>
            <td>{{$h->alias}}</td>
            <td>{{$h->debut}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
