<!DOCTYPE html>
<html>
<body align="center">
    <?php
    $conn=mysqli_connect('localhost','root','','users');
    if(isset($_POST['email']) && $_POST['password']){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "SELECT userid FROM login WHERE email = '$email' and passcode = '$password'";
      $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count==1){
            echo 'here';
            header('location:home.php');
        }else{
            echo 'Nope';
        }
    }
    ?>
    <form method="post">
        <h1>Welcome to Social Media</h1>
        <input type="email" placeholder="Enter Your Email ID" name="email"/><br><br>
        <input type="Password" placeholder="Enter Your Password" name="password"/><br><br>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>