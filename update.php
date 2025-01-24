<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crudoperation` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $name=$row['username'];
    $email=$row['email'];
    $mbl=$row['mbl'];
    $password=$row['password'];

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mbl=$_POST['mbl'];
    $password=$_POST['password'];

    $sql="update `crudoperation` set id=$id,username='$name',email='$email',mbl=$mbl,password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data Updated Successfully";
        header('location:display.php');
    }else{
        die(mysqli_eror($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <h1>Form</h1>
   <div class="container my-5">
   <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name=" name" value=<?php echo $name ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value=<?php echo $email ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="number" class="form-control" name="mbl" value=<?php echo $mbl ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value=<?php echo $password ?>>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  </body>
</html>