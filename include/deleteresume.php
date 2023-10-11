 <?php
require('../db.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query = "DELETE FROM   resume WHERE id=$id";
	$result = mysqli_query($db,$query);
	if($result){

  echo"<script>window.location.href='../admin/index.php?resume=true';</script>";
       }
}

	?>