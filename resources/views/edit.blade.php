<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Document</title>
</head>

<style>
    .container
    {
        background-color: #1de9b6
    }

</style>
<body>
  <center><h3>Create New Employee</h3></center>
  @if(Session::has('msg'))

  <div class="alert alert-success" role="alert">
    {{-- <h4 class="alert-heading">Successfully Updated</h4> --}}
    {{-- <p>Successfully Updated</p> --}}
    {{-- <hr> --}}
    {{-- <p class="mb-0">Successfully Updated</p> --}}

    <strong>{{ Session::get('msg')}}</strong>
</div>
    @endif
  <div class="container">


     <div class="col-sm-md-5">
         <form action="{{ URL::to('update/'.$employees->id)}}" method="post">
           {{ csrf_field()}}
           <div class="form-group">
             <label for="">Name</label>
             <input type="text" class="form-control"  name="name" id="" value ="{{$employees->name }}">
           </div>

           <div class="form-group">
             <label for="">Email</label>
             <input type="text" class="form-control"  name="email" id="" value ="{{$employees->email }}">
           </div>

           <div class="form-group">
             <label for="">Salary</label>
             <input type="number" class="form-control" name="salary" id="" value ="{{$employees->salary }}">
           </div>

           <div class="form-group">
             <label for="">Birth Date</label>
             <input type="date" class="form-control" name="birth_date" id="" value ="{{$employees->birth_date }}">
           </div>

           <div class="form-group">
             <select class="form-control"  name="department"
                 <label for="">Department</label>
                 <option selected>Select Department</option>
                 <option value="cse" {{ ($employees->department == 'cse')? 'selected' : ''}}> Computer Science & Engineering</option>
                 <option value="ce" {{ ($employees->department == 'ce')? 'selected' : ''}}>Civil Engineering</option>
                 <option value="me" {{ ($employees->department == 'me')? 'selected' : ''}}>Mechanical Engineering</option>
             </select>
          </div>

           <div class="form-group">
             <label for="">Status</label>
              <div class="form-check">
                 <input class="form-check-input" type="checkbox" name="status" value="1" id="" {{ ($employees->status == '1')? 'checked' : '' }}>
                 <label class="form-check-label" for="">
                      Active
                 </label>
              </div>
           </div>

            <div class="form-group">
              <label for="">Gender</label>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="" value="male" {{ ($employees->gender == 'male')? 'checked' : '' }}>
                  <label class="form-check-label" for="" >
                      Male
                  </label>
               </div>
               <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id=""  value="female" {{ ($employees->gender == 'female')? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        Female
                    </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input" type="radio" name="gender" id="" value="other" {{ ($employees->gender == 'other')? 'checked' : '' }}>
                  <label class="form-check-label" for="">
                     other
                  </label>
               </div>
          </div>

          <div class="form-group">
              <button  class="btn btn-success" type="submit">Update</button>
              <a class="btn btn-primary" href="{{ URL::to('employees') }}">Back</a>
          </div>
      </form>

     </div>
 </div>




</body>
</html>
