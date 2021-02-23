<?php

include('db.php');

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$nom_p = $_POST['nom_p'];


  $description_p = $_POST['description_p'];
  $description_p2 = $_POST['description_p2'];
  $description_p3 = $_POST['description_p3'];
  $description_p4 = $_POST['description_p4'];
  $description_p5 = $_POST['description_p5'];
  $description_p6 = $_POST['description_p6'];
  $description_p7 = $_POST['description_p7'];
  $description_p8 = $_POST['description_p8'];

	$cat_p = $_POST['cat_p'];
  $cat_p2 = $_POST['cat_p2'];
  $cat_p3 = $_POST['cat_p3'];

	
  $msg = "";
  
  $image = $_FILES['image']['name'];
  $target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image correctement ajouté";
  	}else{
  		$msg = "Ajout echoué";
  	}

  	$insert_data = "INSERT INTO Produits (id,nom_p,description_p,description_p2,description_p3,description_p4,description_p5,description_p6,description_p7,description_p8,cat_p,cat_p2,cat_p3,image) VALUES ('$id','$nom_p','$description_p','$description_p2','$description_p3','$description_p4','$description_p5','$description_p6','$description_p7','$description_p8','$cat_p','$cat_p2','$cat_p3','$image')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Donnée non ajouté";
  	}

}

?>