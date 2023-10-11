<?php
require('../db.php');
if (isset($_POST['login'])){
  
  $user_id=$_POST['user_id'];
  $password=$_POST['password'];
  $query="SELECT * FROM admin WHERE user_id='$user_id'
  && password='$password'";

  $run= mysqli_query($db,$query);
  $data= mysqli_fetch_array($run);
  if($data){
    $_SESSION['isUserLoggedIn']=true;
    $_SESSION['userId']=$_POST['user_id'];
    echo"<script>window.location.href='index.php';</script>";
  }else{
    echo"<script>alert('Incorrect user_id or password!')</script>";
  }


}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> My Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style> 
    .card-body {  background: linear-gradient( 152deg , #060101f5 50%, #f20c0c 18%);
    }

    .login-logo{
      background:   linear-gradient( 204deg , #f20c0c 24%, #060101f5 18%);
    }
 
.outer{  
margin:auto; 
height:60%; 
width:50%; 
border:2px solid black; 
position:relative 
} 
p{ 
margin-left:80px; 
} 
.in{ 
margin-left:80px; 
padding:10px 
} 
#bt{ 
margin-top:50px; 
position:absolute; 
left:243px; 
width: 127px;
} 
#bt:hover{ 
background:green; 
font-size:13px; 
cursor:pointer; 
color:white; 
}
.btn
{
  background: #3f69f2;
    padding: 10px 40px;
    border: navajowhite;
    color: #fff;
}
</style> 
<script> 
function fa(){ 
if(a.value=="" || b.value==""){ 
f() 
document.getElementById("a").style.border="2px solid red" 
document.getElementById("b").style.border="2px solid red" 
bt.value="Fill Input's" 
} 
else{ 
document.getElementById("a").style.border="2px solid green" 
document.getElementById("b").style.border="2px solid green" 
bt.value="Sumbit" 
bt.style.left="113px"; 
} 
} 
flag=1 
function f(){ 
if(flag==1){ 
bt.style.left="215px" 
flag=2 
} 
else if(flag==2){ 
bt.style.left="4%" 
flag=1 
} 
} 
</script>
</head>


<body class="hold-transition login-page">

<div class="login-box">
   
          <img src="../images/admin2.jpg" class="img-circle elevation-2" style= "margin-left:145px;width: 70px;height: 70px" >
        
  <div class="login-logo">
    <a href="index.php"><b style="color:white">My Admin</b> </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"style="color:white">Login/Sign-in</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control"  name="user_id" placeholder="User_id"id="a"/ required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- <input type="password" class="form-control" name="password" placeholder="Password"id="b"/ required> -->
<input type="password" name="password"placeholder="Password" autocomplete="current-password" id="id_password"  style="width: 294px;height: 38px">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -57px;    margin-top: 14px; cursor: pointer;"></i>

          <script>
            const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
          </script>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         <!--  <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn" onmouseenter="fa()"  id="bt" />Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

       
      <!-- /.social-auth-links -->

       
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
