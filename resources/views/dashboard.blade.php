<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<div>
<h2>Dashboard</h2>
<p>hiii {{ session('username') }}</p>
<p>your mail is {{ session('useremail') }}</p>
<p>your role is {{ session('userrole') }}</p>
</div>

@if(Session::has('msg'))
<p>{{ Session::get('msg') }}</p>
@endif
</body>
</html>
