<?php 
 require_once('users.php');
 $nazmul = new users();

 if($_GET['id']){
   $editData = $nazmul->getFormData($_GET['id']);
 }
 // $record = $nazmul->tablelist();

 if(isset($_POST['update'])){
   print_r($_GET['id']); exit;
 // print_r($_POST);exit;
  $updates = $nazmul->updateData($_POST, $_GET['id']);
 }

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
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="<?php echo $editData['name'];?>" placeholder="Your name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Email*</label>
            <input type="email" class="form-control" name="email" value="<?php echo $editData['email'];?>" placeholder="Your email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword" class="form-label" placeholder="">Phone*</label>
            <input type="number" class="form-control" value="<?php echo $editData['phone'];?>" name="phone">
          </div>
          <button type="submit" name="update" value="Update" class="btn btn-primary">Update</button>
</form>

    </div>
     </div>



      
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>