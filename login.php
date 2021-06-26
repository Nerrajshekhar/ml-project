<?php 
  include 'connection.php';
  error_reporting(0);
  session_start();

  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user_login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: welcome.php");
    }else{
      echo "<script>alert('Email or Password is wrong!')</script>";
    }
  }
?>

<?php 
  include ('include/header.php');
?>   

<style>
  .registration-form{
    margin: 50px;
    margin-left: 30%;
    position: absolute;
    padding: 25px;
    border: 2px solid rgba(6, 15, 61, 0.911);
      }

    .registration-form h1{
      color: rgba(6, 15, 61, 0.911);
      margin-left: 84px;
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
          <h1>Login</h1>
          <form action="" method="POST">
              <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" placeholder="Enter your Email" class="form-control" value="<?php echo $email;?>" required>
              </div>
              <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Your Password" class="form-control" value="<?php echo $password;?>" required>
              </div>
              <div class="row">
                <div class="col-sm">
                <button type="submit" class="btn btn-primary" name='submit'>Login</button>
                </div>          
              
              </div>
              <p class="login-register-text">Don't have an account? <a href="registration.php">Register Here</a></p>
          </form>
      </div>
    </div>
