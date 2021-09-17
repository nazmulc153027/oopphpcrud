<?php 
 require_once('users.php');
 $nazmul = new users();

 
 
 if($_POST['submit']){
    $nazmul->addRecord($_POST);
 }
 // $record = $nazmul->tablelist();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mx-auto">
         <h1 class="mt-4">OOP PHP CRUD OPERATION</h1>

    <form method="POST" action="" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name*</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Your name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Email*</label>
            <input type="email" class="form-control" name="email" placeholder="Your email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword" class="form-label" placeholder="">Phone*</label>
            <input type="number" class="form-control" name="phone">
          </div>
          <button type="submit" name="submit" value="name" class="btn btn-primary">Submit</button>
</form>


           <!--  <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach ($record as $val) {?>
                    <td><?php echo $val['name'];?></td>
                    <td><?php echo $val['email'];?></td>
                    <td><?php echo $val['phone'];?></td>
                    <td><a href="edit.php ?id=<?php echo $val['id'];?>">Edit</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table> -->
    </div>
     </div>



      
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>