<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew" style="float: right;">Add new</button>


  <div class="modal fade" id="addNew" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times; &nbsp;</button>
        <div class="modal-header"><h3 class="text-center">Add a new user to the table</h3></div>
        <div class="modal-body">

          <form method="post" role="form" action="{{url('/form')}}">
            {{csrf_field()}}

            <div class="form-group">
              <label for="Firstname">First Name:</label>
              <input type="text" name="Firstname" class="form-control" id="Firstname" placeholder="Enter Firstname">
            </div>

            <div class="form-group">
              <label for="Firstname">Last Name:</label>
              <input type="text" name="Lastname" class="form-control" id="Lastname" placeholder="Enter Lastname">
            </div>

            <div class="form-group">
              <label for="Firstname">Email:</label>
              <input type="email" name="Email" class="form-control" id="Email" placeholder="Enter Email">
            </div>

            <div class="modal-footer">
              <button type="submit" value="submit" class="btn btn-primary" style="">Add User</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

 
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Delete option</th>
      </tr>
    </thead>

   
    <tbody>
      <tr>
        
        <td>Samson</td>
        <td>Samuels</td>
        <td>samsonadegboyega@gmail.com</td>

        <td><button class="btn btn-danger">Delete</button></td>
      </tr>
    </tbody>
  
  </table>

      <!-- <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><button class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><button class="btn btn-danger">Delete</button></td>
      </tr>
      <tr></tr>
    </tbody>
  </table> -->
</div>

</body>
</html>
