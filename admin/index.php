<?php
require('../db.php');
if(!isset($_SESSION['isUserLoggedIn'])){

  echo"<script>window.location.href='login.php';</script>";
}

 
 $query= "SELECT * FROM home,section_control,social_media,about,contact,changebackground,admin";
 $run= mysqli_query($db,$query);
 $user_data=mysqli_fetch_array($run);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       
    </ul>

    <!-- SEARCH FORM -->
     

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      
      
      <li class="nav-item">
        <p style="color: green;font-weight: 900;">ID:<?php echo $_SESSION['userId'];?></p>
        <a class="nav-link"   href="../include/logout.php"  >
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Pannel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/<?=$user_data['admin_pic']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$user_data['tittle']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Section control
                </p>
            </a>
        </li>
          
<li class="nav-item menu-open">
            <a href="index.php?home=true" class="nav-link ">
              <i class="fa fa-home" aria-hidden="true"></i>
              <p>
                Home
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="index.php?about=true" class="nav-link ">
              <i class="fa fa-address-book" aria-hidden="true"></i>
              <p>
                About
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="index.php?resume=true" class="nav-link ">
          <i class="fa fa-address-card" aria-hidden="true"></i>
              <p>
                Resume
                </p>
            </a>
        </li>
          
          <li class="nav-item menu-open">
            <a href="index.php?portfolio=true" class="nav-link ">
              <i class="fa fa-female" aria-hidden="true"></i>
              <p>
                Portfolio
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="index.php?services=true" class="nav-link ">
             <i class="fa fa-sign-language" aria-hidden="true"></i>
              <p>
                Services
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="index.php?contact=true" class="nav-link ">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <p>
                Contact
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="index.php?changebackground=true" class="nav-link ">
              <i class="fa fa-address-card" aria-hidden="true"></i>
              <p>
                Change Background
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="index.php?accountsetting=true" class="nav-link ">
           <i class="fa fa-cog" aria-hidden="true"></i>
              <p>
                Account Setting
                </p>
            </a>
        </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Site</h1>
          </div><!-- /.col -->
          <div>
            <img src="../images/r.GIF" width="100%" height="70%">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
         
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

          <?php
          if(isset($_GET['home'])){?>

            
        <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="tittle" class="form-control" value="<?=$user_data['tittle']?>" id="exampleInputEmail1" placeholder="Enter tittle">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Where are you from:</label>
                    <input type="text" name="subtittle" class="form-control" value="<?=$user_data['subtittle']?>" id="exampleInputEmail1" placeholder="Enter sub-tittle">
                  </div>

                  
                  
                  <div class="form-check">
                    <input type="checkbox" name="showicons"class="form-check-input" id="exampleCheck1"

<?php
                          if($user_data['showicons']){
                            echo"checked";
                          }
                      ?>
                    >
                    <label class="form-check-label" for="exampleCheck1">show social icons</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_home" class="btn btn-primary">Save&Change</button>
                </div>
              </form>
            </div>




         
            <?php

          }else if(isset($_GET['about'])){

            ?>

<div class="card card-dark col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <img src="../images/<?=$user_data['profile_pic']?>" class="col-2">
              <form action="../include/admin.php" method="post"
              enctype="multipart/form-data">
                <div class="card-body">

 <div class="form-group">
                    <label for="exampleInputEmail1">About Your Profile-pic</label>
                    <input type="file" name="profile_pic" class="form-control"    >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tittle</label>
                    <input type="text" name="about_tittle" class="form-control" value="<?=$user_data['about_tittle']?>" id="exampleInputEmail1" placeholder="Enter tittle">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Sub-tittle</label>
                    <input type="text" name="about_subtittle" class="form-control" value="<?=$user_data['about_subtittle']?>" id="exampleInputEmail1" placeholder="Enter sub-tittle">
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">About-Description</label>
                    <input type="text" name="about_desc" class="form-control" value="<?=$user_data['about_desc']?>" id="exampleInputEmail1" placeholder="Enter sub-tittle" style="width: 800px;height: 80px;">
                  </div>

                  <!--  <div class="form-group">
                    <label for="exampleInputEmail1">About-Description</label><br>
                     <textarea cols="50" name="about_desc"<?=$user_data['about_desc'] ?>>
                       
                     </textarea>
                  </div>
  -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_about" class="btn btn-primary">Save&Change</button>
                </div>
              </form>
            </div>




<!--skills-->

<div class="card card-dark col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage-Skills</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


<div class="card" style="background: linear-gradient(90deg, rgba(163,230,208,1) 0%, rgba(232,235,119,0.4206057422969187) 50%, rgba(215,200,160,1) 100%);">
              <div class="card-header">
                <h3 class="card-title">View-skills</h3>

            
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">(sachin)-</th>
                      <th>Skill Name</th>
                      <th>Skill Level</th>
                      <th style="width: 40px">action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
 $sql= "SELECT * FROM  skills";
 $run= mysqli_query($db,$sql);
  $c =1;
 while($skills=mysqli_fetch_array($run)){
  ?>
 <tr>
                      <td><?=$c?></td>
                      <td style="color: red;font-weight: 900;"><?=$skills['skill_name']?></td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" style="width: <?=$skills['skill_level']?>%"></div>

                        </div>
                        <span class="badge bg-warning"><?=$skills['skill_level']?>%</span>
                      </td>
                      <td> 
<a href="../include/deleteskills.php?id=<?=$skills['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                      </td>
                    </tr>

  <?php
  $c++;
}
?>
                    
                     
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



              
              <form action="../include/admin.php" method="post">
                <div class="card-body">

 <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skills-Name</label>
                    <input type="text" name="skill_name" class="form-control"    >
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skill-level</label>
                    <input type="range" min="1" max="100" name="skill_level" class="form-control" value="<?=$user_data['about_tittle']?>" id="exampleInputEmail1"  >
                  </div>

                 
   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add_skills" class="btn btn-primary"> Add-skills  <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>






<!--personol_info-->





<div class="card card-dark col-lg-12 ">
              <div class="card-header">
                <h3 class="card-title">Manage Personal-Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


<div class="card" style="background: linear-gradient(132deg, rgba(13,219,196,1) 28%, rgba(98,215,143,1) 64%, rgba(88,185,114,1) 95%);">
              <div class="card-header">
                <h3 class="card-title">Personal-Information</h3>

            
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <a href="#">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tittle</th>
                       <th>Sub-tittle</th>
                      <th style="width: 40px">action</th>
                    </tr>
                  </thead>
                </a>
                  <tbody>
<?php
 $sql= "SELECT * FROM  personal_info";
 $run= mysqli_query($db,$sql);
  $c =1;
 while($personal_info=mysqli_fetch_array($run)){
  ?>
 <tr>
                      <td><?=$c?></td>
                      <td style="color: red;font-weight: 900;"><?=$personal_info['tittle']?></td>
                      <td style="color: red;font-weight: 900;"><?=$personal_info['sub_tittle']?></td>
                     
                      <td> 
<a href="../include/deleteinfo.php?id=<?=$personal_info['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                      </td>
                    </tr>

  <?php
  $c++;
}
?>
                    
                     
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



              
              <form action="../include/admin.php" method="post">
                <div class="card-body">

 <div class="form-group col-6">
                    <label for="exampleInputEmail1">Info-Tittle</label>
                    <input type="text" name="tittle" class="form-control"    >
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Info-subtittle</label>
                    <input type="text"  name="sub_tittle" class="form-control">
                  </div>

                 
   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add_personal_info" class="btn btn-primary">Add Personal-info. &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>







<!--resume-->

            <?php
            }elseif(isset($_GET['resume'])){

           ?>

<div class="card card-dark col-lg-12 ">
              <div class="card-header">
                <h3 class="card-title">Manage Resume</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


<div class="card" style="background-color: #FAACA8;
background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);
">
              <div class="card-header">
                <h3 class="card-title">Education & Work</h3>

            
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <a href="#">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Type</th>
                       <th>Tittle</th>
                       <th>Time</th>
                       <th>Inst./comp.</th>
                       <th>About</th>
                      <th style="width: 40px">action</th>
                    </tr>
                  </thead>
                </a>
                  <tbody>
<?php
 $sql= "SELECT * FROM  resume";
 $run= mysqli_query($db,$sql);
  $c =1;
 while($resume=mysqli_fetch_array($run)){
  ?>
 <tr>
                      <td><?=$c?></td>
                      <td style="color: blue;font-weight: 900;"><?=$resume['type']?></td>
                      <td style="color: blue;font-weight: 900;"><?=$resume['tittle']?></td>
                       <td style="color: blue;font-weight: 900;"><?=$resume['time']?></td>
                        <td style="color: blue;font-weight: 900;"><?=$resume['org']?></td>
                         <td style="color: blue;font-weight: 900;"><?=$resume['about_exp']?></td>
                     
                      <td> 
<a href="../include/deleteresume.php?id=<?=$resume['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                      </td>
                    </tr>

  <?php
  $c++;
}
?>
                    
                     
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



              <form action="../include/admin.php" method="post">
                <div class="card-body">

 <div class="form-group col-6">
                    <label for="exampleInputEmail1">Type</label><br>
                     <select name="type" class="form-control">
                       <option value="edu">Education</option>
                       <option value="exp">Professional</option>
                     </select>
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Tittle</label>
                    <input type="text"  name="tittle" class="form-control">
                  </div>

                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text"  name="time" class="form-control">
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Orgnisation</label>
                    <input type="text"  name="org" class="form-control">
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">About</label>
                    <input type="text"  name="about_exp" class="form-control">
                  </div>
                 
   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add_resume" class="btn btn-primary">Add Details &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>


            <!--portfolio-->
 
         <?php
 
            }elseif(isset($_GET['portfolio'])){
              ?>
<div class="card card-dark col-lg-12 ">
              <div class="card-header">
                <h3 class="card-title">Manage Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


<div class="card" style="background-color: #FAACA8;
background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);
">
              <div class="card-header">
                <h3 class="card-title">Your Project</h3>

            
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <a href="#">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Project pic</th>
                       <th>Project type</th>
                       <th>Project name</th>
                       <th>Project link</th>
               
                      <th style="width: 40px">action</th>
                    </tr>
                  </thead>
                </a>
                  <tbody>
<?php
 $sql= "SELECT * FROM   portfolio";
 $run= mysqli_query($db,$sql);
  $c =1;
 while($portfolio=mysqli_fetch_array($run)){
  ?>
 <tr>
                      <td><?=$c?></td>
                      <td><img src="../images/<?=$portfolio['project_pic']?>" style="width: 150px"/></td>

                      <td style="color: blue;font-weight: 900;"><?=$portfolio['project_type']?></td>

                      <td style="color: blue;font-weight: 900;"><?=$portfolio['project_name']?></td>

                       <td><a href="<?=$portfolio['project_link']?>" target="_blank">Open link</td>
                         
                          
                      <td> 
<a href="../include/deleteportfolio.php?id=<?=$portfolio['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                      </td>
                    </tr>

  <?php
  $c++;
}
?>
                    
                     
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



              
              <form action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

 <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select-Type</label><br>
                     <select name="project_type" class="form-control">
                       <option value="Static">Static</option>
                       <option value="Dynamic">Dynamic</option>
                       <option value="Codeinighter">Codeinighter</option>
                       
                     </select>
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Image</label>
                    <input type="file"  name="project_pic" class="form-control">
                  </div>

                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text"  name="project_name" class="form-control">
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Link</label>
                    <input type="text"  name="project_link" class="form-control">
                  </div>

                   
                 
   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add_project" class="btn btn-primary">Add Family &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>



<!--contact-->

             <?php 
            }elseif(isset($_GET['contact'])){
              ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Contact</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" value="<?=$user_data['address']?>" id="exampleInputEmail1" placeholder="Enter address">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Email-Id</label>
                    <input type="text" name="email" class="form-control" value="<?=$user_data['email']?>" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

<div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="<?=$user_data['mobile']?>" id="exampleInputEmail1" placeholder="Enter mobile">
                  </div>

                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_contact" class="btn btn-primary">change contact</button>
                </div>
              </form>
            </div>

<!-- background image-->

<?php
}elseif(isset($_GET['changebackground'])){
  ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Change Background on site</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['background']?>" class="col-6">
              <form action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">
                    Choose Background </label>
                    <input type="file" name="background">
                  </div>

                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_background" class="btn btn-primary">Background Image Update</button>
                </div>
              </form>
            </div>

<!-- account setting-->
     
<?php
}elseif(isset($_GET['accountsetting'])){
  ?>
<div class="card card-danger col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Change ID & Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['admin_pic']?>" class="col-2">
              <form action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">
                    Profile Pic </label>
                    <input type="file" class="form-control" name="admin_pic">
                  </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">
                    Id </label>
                    <input type="text" class="form-control" name="user_id" value="<?=$user_data['user_id']?>">
                  </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">
                    Password </label>
                    <!-- <input type="text" class="form-control" name="password" value="<?=$user_data['password']?>"> -->

<input type="password" name="password" autocomplete="current-password" id="id_password" value="<?=$user_data['password']?>" >
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
  
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

                  </div>

                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_account" class="btn btn-primary">Save&change</button>
                </div>
              </form>
            </div>

<?php
}else{
  ?>

          <form method="POST" action="../include/admin.php">
        <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1" name="home"
                      <?php
                          if($user_data['home_section']){
                            echo"checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch1">Home</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2" name="about"
                      <?php
                          if($user_data['about_section']){
                            echo"checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch2">About</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3" name="resume"
                      <?php
                          if($user_data['resume_section']){
                            echo"checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch3">Resume</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch4" name="services"
                      <?php
                          if($user_data['services_section']){
                            echo"checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch4">Services</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch5" name="portfolio"
                      <?php
                          if($user_data['portfolio_section']){
                            echo"checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch5">Portfolio</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch6" name="contact"
                      <?php
                          if($user_data['contact_section']){
                            echo"checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch6">Contact</label>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-sm btn-primary" name="update_section" value="Save Change"> 
</form>
<?php
}
?>
         </div>

        
          <section class="col-lg-4 connectedSortable" style="margin-top: 64px;">

            <!-- Map card -->
            <!-- <div class="card bg-gradient-primary"> -->
               
              <!-- <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div> -->
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>  
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023<a href="#">Sachin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 10.02.2023
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
