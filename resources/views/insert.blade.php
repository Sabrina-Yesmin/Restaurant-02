<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
  <div class="container ">

     <div class="col-sm-md-5">
         <form action="{{ URL::to('store-employees')}}" method="post">
           {{ csrf_field()}}
           <div class="form-group">
             <label for="">Name</label>
             <input type="text" class="form-control"  name="name" id="">
           </div>

           <div class="form-group">
             <label for="">Email</label>
             <input type="text" class="form-control"  name="email" id="">
           </div>

           <div class="form-group">
             <label for="">Salary</label>
             <input type="text" class="form-control" name="salary" id="">
           </div>

           <div class="form-group">
             <label for="">Birth Date</label>
             <input type="date" class="form-control" name="birth_date" id="">
           </div>

           <div class="form-group">
             <select class="form-control mt-2"  name="department">
                 <label for="">Department</label>
                 <option selected>Select Department</option>
                 <option value="cse"> Computer Science & Engineering</option>
                 <option value="ce">Civil Engineering</option>
                 <option value="me">Mechanical Engineering</option>
             </select>
          </div>

           <div class="form-group">
             <label for="">Status</label>
              <div class="form-check">
                 <input class="form-check-input" type="checkbox" name="status" value="1" id="" >
                 <label class="form-check-label" for="">
                      Active
                 </label>
              </div>
           </div>

            <div class="form-group">
              <label for="">Gender</label>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="" value="male">
                  <label class="form-check-label" for="">
                      Male
                  </label>
               </div>
               <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id=""  value="female">
                    <label class="form-check-label" for="">
                        Female
                    </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input" type="radio" name="gender" id="" value="other">
                  <label class="form-check-label" for="">
                     other
                  </label>
               </div>
          </div>

          <div class="form-group">
              <button  class="btn btn-warning" type="submit">Submit</button>
               <a class="btn btn-primary" href="{{ URL::to('employees') }}">Show Employee</a>
          </div>
      </form>

     </div>
 </div>




</body>
</html>
