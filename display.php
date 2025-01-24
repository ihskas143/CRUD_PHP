<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Lead No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="select * from `crudoperation`";
  $result=mysqli_query($con,$sql);
  if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['username'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['username'];
        $email=$row['email'];
        $mbl=$row['mbl'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mbl.'</td>
      <td>'.$password.'</td>
      <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
    </tr>';
    }
  }
  ?>
  
  
  </tbody>
</table>
    </div>
    
</body>
</html>