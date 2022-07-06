<?php
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM `use` WHERE id =$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "UPDATE `use` SET `id`='$id', `name`='$name', `email`='$email', `mobile`='$mobile', `password`='$password' WHERE id=$id";
        $result = mysqli_query($con, $sql);
    
        if($result) 
        {
           echo "Upadated Successfully!"; 
           //header('location:display.php');
        }else
        {
           die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curd Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class ="container my-5">
        <form method = "POST">
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value=<?php echo $name;?>>
            </div><br>
            <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" value=<?php echo $email;?>>
            </div><br>
            <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="text" class="form-control" placeholder="Enter Your Mobile Address" name="mobile" value=<?php echo $mobile;?>>
            </div><br>
            <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" placeholder="Enter Your Password" name="password"3 value=<?php echo $password;?>">
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    
  </body>
</html>