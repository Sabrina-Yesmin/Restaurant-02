<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    {{--asset nam er function ta public directory porjontho niye jai--}}
</head>
<style>
    /* .container
    {
        background-color: #071566
    } */

</style>
<body>

{{-- for login --}}
{{-- <div class="container" > --}}
<div class="login-box" >
	<div class="login-header">Login</div>
    @if(Session::has('err_msg'))       {{--alert --}}
      <div class="alert alert-danger" role="alert">
       {{ Session::get('err_msg') }}
      </div>
    @endif

	<div class="login-body">
		<form class="form-group"  method="post" action="{{ URL::to('loginstore')}}">
            {{ csrf_field()}}   {{-- server attack theke secure thakte --}}
			<label>Email</label>
			<input type="email" class="form-control" name="email">
			<label>Password</label>
			<input type="password" class="form-control" name="password">
            <br>
			{{-- <input type="checkbox" value="checked"><b>Remember</b> --}}
			<input type="submit" value="Login" class="form-control btn btn-danger " name="">
		</form>
	</div>
</div>
{{-- </div> --}}


{{-- end for login --}}


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
