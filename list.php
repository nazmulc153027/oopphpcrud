<?php 

require_once('users.php');
 $nazmul = new users();
 $record = $nazmul->tablelist();
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

<div class="container">
  <h2>Data List</h2>         
  <table class="table table-striped">
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
        <td><a href="edit.php?id=<?php echo $val['id'];?>">Edit</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>