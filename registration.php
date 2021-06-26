<?php
  include 'connection.php';
  error_reporting(0);
  session_start();
  if(isset($_SESSION['username'])){
    header('Location: index.html');
  }
  if(isset($_POST['submit'])){
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $password =  md5($_POST['password']);
    $cpassword =  md5($_POST['cpassword']);

    if($password == $cpassword){
      $sql = "SELECT * FROM user_login WHERE email='$email' ";
      $result = mysqli_query($conn, $sql);
      if(!$result->num_rows > 0) {
          $sql = "INSERT INTO user_login (username, email, password) VALUES('$username','$email','$password')";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo "<script>alert('wow! user registration success')</script>";
            $username= '';
            $email = '';
            $_POST['password'] = '';
            $_POST['cpassword'] = '';
          }else{
            echo "<script>alert('something went wrong')</script>";
          }        
      }else{
        echo "<script>alert('Email already exits.')</script>";
      }      
    }else{
      echo "<script>alert('Password Not Matched')</script>";
    }
  }
?>
   
<?php 
  include ("include/header.php");
?>  

<style>
  .registration-form{
    margin: 50px;
    margin-left: 20%;
    position: absolute;
    padding : 25px;
    border : 2px solid rgba(6, 15, 61, 0.911);
      }

    .registration-form h1{
      color: rgba(6, 15, 61, 0.911);
      margin : 10px 150px 30px 150px;
    }

    .registration-form label{
      margin: inherit;
    }

    .registration-form button{
      position: absolute;
      left: 50%;
      transform: translate(-52%, 19%);
      }

      p{
        margin-top: 63px;
    margin-bottom: 0rem;
    text-align: center;
}
      }
</style>


  <div class="container">
    <div class="registration-form">
        <h1>Registration</h1>
        <form action="registration.php" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" class="form-control"  value="<?php echo $_POST['username'];?>" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter Email Address" class="form-control" value="<?php echo $_POST['email'];?>"required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo $_POST['password'];?>"required>
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" value="<?php echo $_POST['cpassword'];?>"required>
          </div>
          <div class="row">
            <div class="col-sm">
              <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>        
          </div>
          <div>
          <p class="login-register-text">Have an account? <a href="index.html">Login</a></p>
          </div>
        </form>
    </div>
  </div>


