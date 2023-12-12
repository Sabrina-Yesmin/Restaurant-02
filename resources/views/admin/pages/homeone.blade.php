@extends('admin.layouts.admin')

@section('content')
<center><h1>Welcome</h1></center>
<center><h2>Dashboard Page</h2></center>

@stop
@section('links')
<!-- Custom fonts for this template -->
<link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
    href="{{asset('admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{asset('admin/http://127.0.0.1:8000/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@stop


