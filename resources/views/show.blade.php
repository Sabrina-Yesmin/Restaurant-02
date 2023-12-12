<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <div class="container">
        @if(Session::has('msg'))

        <div class="alert alert-danger" role="alert">
          <strong>{{ Session::get('msg')}}</strong>
      </div>
          @endif
        <center><h2>All Employess</h2></center>
        <a class="btn btn-primary" href="{{ URL::to('insert') }}">Add New Employee</a>
        <table class="table table table-hover table-warning">
         <thead>
     <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Salary</th>
    <th>Birth Date</th>
    <th>Department</th>
    <th>Status</th>
    <th>Gender</th>
    <th class="text-center ">Action</th>
    <th></th>
         </thead>
         <tbody>
             {{-- @if($employees) --}}
    @foreach($employees as $e)

    <tr>
    <td class="table-success">{{$e->id}}</td>
    <td class="table-light">{{$e->name}}</td>
    <td class="table-danger">{{$e->email}}</td>
    <td class="table-info">{{$e->salary}}</td>
    <td class="table-light">{{$e->birth_date}}</td>
    <td class="table-primary">{{$e->department}}</td>

   @if ($e->status == '1')
   <td class="text-success">Active</td>
@else
   <td class="text-warning">Inactive</td>
@endif

    <td class="table-danger">{{$e->gender}}</td>
    <td>
        <a href="{{ URL:: to('edit/'.$e->id) }}" class="btn btn-warning">Edit</a>
        {{-- <a href="{{ URL:: to('delete/'.$e->id) }}" class="btn btn-danger">Delete</a> --}}

        <a  class="btn btn-danger" data-toggle="modal" data-target="#myModal{{ $e->id }}">Delete</a>



        <div class="modal" id="myModal{{ $e->id }}">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Delete Confirmation</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>Are you sure you want to delete <b>{{ $e->name }}</b> </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a  href="{{ URL:: to('delete/'.$e->id) }}" class="btn btn-danger">Yes</a>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>



        </td>
        <td>
        </tr>
		@endforeach


        {{-- @else
        <tr>
            <td colapse="3" class="text-center"> no records</td>
        </tr> --}}


</tbody>
</table>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
