<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$nom_p = $_POST['nom_p'];
	$description_p = $_POST['description_p'];
	$description_p2 = $_POST['description_p2'];
	$description_p3 = $_POST['description_p3'];
	$description_p4 = $_POST['description_p4'];
	$description_p5 = $_POST['description_p5'];
	$description_p6 = $_POST['description_p6'];
	$description_p7 = $_POST['description_p7'];
	$description_p8 = $_POST['description_p8'];


	$cat_p  = $_POST['cat_p'];
	$cat_p2  = $_POST['cat_p2'];
	$cat_p3  = $_POST['cat_p3'];

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image correctement ajouté";
  	}else{
  		$msg = "ajout echoué";
  	}

	$update = "UPDATE Produits SET nom_p='$nom_p', description_p = '$description_p', description_p2 = '$description_p2', description_p3 = '$description_p3', description_p4 = '$description_p4', description_p5 = '$description_p5', description_p6 = '$description_p6', description_p7 = '$description_p7', description_p8 = '$description_p8', cat_p = '$cat_p', cat_p2 = '$cat_p2', cat_p3 = '$cat_p3', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:index.php');
	}else{
		echo "Data not update";
	}
}

?>