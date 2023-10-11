<?php
require('../db.php');
if(isset($_POST['update_section'])){
   $home = $_POST['home'] ?? 0; 
   $about = $_POST['about'] ?? 0;
   $resume = $_POST['resume'] ?? 0;
   $services = $_POST['services'] ?? 0;
   $portfolio = $_POST['portfolio'] ?? 0;
   $contact = $_POST['contact'] ?? 0;

  $query = "UPDATE section_control SET ";
  $query.="home_section='$home',"; 
   $query.="about_section='$about',";
    $query.="resume_section='$resume',";
     $query.="services_section='$services',";
      $query.="portfolio_section='$portfolio',";
       $query.="contact_section='$contact' WHERE id=1";

       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php';</script>";
       }
}

 


if(isset($_POST['update_home'])){
    
   $tittle = mysqli_real_escape_string($db,$_POST['tittle']);
   $subtittle = mysqli_real_escape_string($db,$_POST['subtittle']);
   $showicons = $_POST['showicons'] ?? 0;
 

  $query = "UPDATE home SET ";
  $query.="tittle='$tittle',"; 
   $query.="subtittle='$subtittle',";
       $query.="showicons='$showicons' WHERE id=1";

       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?home=true';</script>";
       }
 }




if(isset($_POST['update_contact'])){
    
   $address = mysqli_real_escape_string($db,$_POST['address']);
   $email = mysqli_real_escape_string($db,$_POST['email']);
     $mobile = mysqli_real_escape_string($db,$_POST['mobile']);
 
 

  $query = "UPDATE  contact SET ";
  $query.="address='$address',"; 
   $query.="email='$email',";
       $query.="mobile='$mobile' WHERE id=1";

       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?contact=true';</script>";
       }
 }









if(isset($_POST['update_about'])){
    
   $about_tittle = mysqli_real_escape_string($db,$_POST['about_tittle']);
   $about_subtittle = mysqli_real_escape_string($db,$_POST['about_subtittle']);
   $about_desc = mysqli_real_escape_string($db,$_POST['about_desc']);
 
   $imagename = time().$_FILES['profile_pic']['name'];
   $imgtemp = $_FILES['profile_pic']['tmp_name'];

   if($imgtemp==''){
    $sql = "SELECT * FROM about WHERE 1";
    $run = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($run);
    $imagename = $data['profile_pic']; 

   }
   if(move_uploaded_file($imgtemp,"../images/$imagename")){


$query = "UPDATE  about SET ";
  $query.="about_tittle='$about_tittle',"; 
   $query.="about_subtittle='$about_subtittle',";
    $query.="profile_pic='$imagename',";
       $query.="about_desc='$about_desc' WHERE id=1";

       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?about=true';</script>";
       }

   }
 
 }







if(isset($_POST['add_skills'])){
     
$skill_name = $_POST['skill_name'];
$skill_level = $_POST['skill_level'];
 
$query = "INSERT INTO skills (skill_name,skill_level) VALUES('$skill_name','$skill_level') ";
 
       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?about=true';</script>";
       }

   }
 
 



if(isset($_POST['add_personal_info'])){
     
$tittle = $_POST['tittle'];
$sub_tittle = $_POST['sub_tittle'];
 
$query = "INSERT INTO  personal_info (tittle,sub_tittle) VALUES('$tittle','$sub_tittle') ";
 
       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?about=true';</script>";
       }

   }
 








if(isset($_POST['add_project'])){
     
 $project_type = $_POST['project_type'];
$project_name = $_POST['project_name'];
$project_link = $_POST['project_link'];
$project_pic = time().$_FILES['project_pic']['name'];
 
move_uploaded_file($_FILES['project_pic']['tmp_name'],"../images/$project_pic");
 
 $query = "INSERT INTO   portfolio(project_type,project_name,project_link,project_pic) VALUES('$project_type','$project_name','$project_link','$project_pic') ";
 
       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?portfolio=true';</script>";
       }

   }









if(isset($_POST['add_resume'])){
     
$type = $_POST['type'];
$tittle = $_POST['tittle'];
$time = $_POST['time'];
$org = $_POST['org'];
$about_exp = $_POST['about_exp'];

 
 $query = "INSERT INTO  resume (type,tittle,time,org,about_exp) VALUES('$type','$tittle','$time','$org','$about_exp') ";
 
       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?resume=true';</script>";
       }

   }
 
 




 





if(isset($_POST['update_background'])){
    
    
   $imagename = time().$_FILES['background']['name'];
   $imgtemp = $_FILES['background']['tmp_name'];

   if($imgtemp==''){
    $sql = "SELECT * FROM changebackground WHERE 1";
    $run = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($run);
    $imagename = $data['background']; 

   }
   if(move_uploaded_file($imgtemp,"../images/$imagename")){


$query = "UPDATE  changebackground SET ";
  
    $query.="background='$imagename' WHERE id=1";
        
       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?changebackground=true';</script>";
       }

   }
 
 }









if(isset($_POST['update_account'])){
    
   $user_id = mysqli_real_escape_string($db,$_POST['user_id']);
   $password = mysqli_real_escape_string($db,$_POST['password']);
    
   $imagename = time().$_FILES['admin_pic']['name'];
   $imgtemp = $_FILES['admin_pic']['tmp_name'];

   if($imgtemp==''){
    $sql = "SELECT * FROM  admin WHERE 1";
    $run = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($run);
    $imagename = $data['admin_pic']; 

   }
   if(move_uploaded_file($imgtemp,"../images/$imagename")){


$query = "UPDATE  admin SET ";
  $query.="user_id='$user_id',"; 
   $query.="password='$password',";
    $query.="admin_pic='$imagename'WHERE id=1";
       
       $result= mysqli_query($db,$query);
       if($result){

  echo"<script>window.location.href='../admin/index.php?accountsetting=true';</script>";
       }

   }
 
 }


?>
