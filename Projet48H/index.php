<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Interface gestion</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
            <img style="" src="..\images\logo.jpg" alt="p1">
 

    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a style="height:118px; padding-top:45%; font-family: 'Brush Script MT', cursive;  font-size:30px;  " href="index.php">Accueil</a></li>
    
    </ul>
  
  </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height:450px;">
    <div class="item active" >
      <img style="width: 100%; height: 700px;" src="..\images\f8.jpg" alt="p1">
    </div>

    <div class="item">
  <img style="width: 100%; height: 1000px;" src="..\images\f3.jpg" alt="2">
    </div>

    <div class="item">
         <img style="width: 100%; height: 700px;" src="..\images\f10.jpg" alt="p3">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</nav>

    
   

	<div style="background-color: white;">

</br>
<h2 class="text-center" style="text-decoration: underline; font-size:70px; font-family: 'Brush Script MT', cursive; ">Nos Produits</h2>


    <h4 style="margin-left:20px; font-family: 'Brush Script MT', cursive;  font-size:30px;">
       Ajouter un produits
		   <span style="margin-left: 30px;">

		   	     <a href="#" style="color: grey; margin-left:-30px; font-size: 25px;"><i  class="fa fa-plus" data-toggle="modal" data-target="#myModal"></i></a>

  <h4 style=" font-family: 'Brush Script MT', cursive;  font-size:30px;"> Rechercher un produits</h4>
    <form  action="search.php" method="POST" class="form-inline my-2 my-lg-0" style="margin-top: 15px;">  



      <input  name="Search1" class="form-control mr-sm-2" type="Search1" placeholder="desc1" aria-label="Search1">
      <input  name="Search2" class="form-control mr-sm-2" type="Search" placeholder="desc2" aria-label="Search">
      <input  name="Search3" class="form-control mr-sm-2" type="Search" placeholder="desc3" aria-label="Search">
      <input  name="Search4" class="form-control mr-sm-2" type="Search" placeholder="desc4" aria-label="Search">
      <input  name="Search5" class="form-control mr-sm-2" type="Search" placeholder="desc5" aria-label="Search">
      <input  name="Search6" class="form-control mr-sm-2" type="Search" placeholder="desc6" aria-label="Search">
      <input  name="Search7" class="form-control mr-sm-2" type="Search" placeholder="desc7" aria-label="Search">
      <input  name="Search8" class="form-control mr-sm-2" type="Search" placeholder="desc8" aria-label="Search">

      <input  name="Searcht" class="form-control mr-sm-2" type="Search" placeholder="Tag" aria-label="Search">
    

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrer</button>
    </form>
		   </span>
		</h4>






</br>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">nom du produits</th>
				<th class="text-center">Description image</th>
		
				<th class="text-center">Tags</th>

				<th class="text-center">Image</th>
				<th class="text-center">Modifier</th>
				<th class="text-center">Supprimer</th>
			</tr>



			<?php

        	$get_data = "SELECT * FROM Produits";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$nom_p = $row['nom_p'];
        		$description_p = $row['description_p'];
            $description_p2 = $row['description_p2'];
            $description_p3 = $row['description_p3'];
            $description_p4= $row['description_p4'];
            $description_p5= $row['description_p5'];
            $description_p6= $row['description_p6'];
            $description_p7 = $row['description_p7'];
            $description_p8= $row['description_p8'];
        	
        		$cat_p = $row['cat_p'];
            $cat_p2 = $row['cat_p2'];
            $cat_p3 = $row['cat_p3'];
        		$image = $row['image'];

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
				<td class='text-center'>$nom_p</td>

				<td class='text-center'>
       <p>Fournisseur:  $description_p </p> 
       <p>genre:  $description_p2 </p> 
        <p>infrastructure:$description_p3 </p>
       <p>Format:  $description_p4 </p> 
       <p>auteur:  $description_p5 </p>
       <p>Type d'utilisation: $description_p6 </p> 
      <p>Copyright: $description_p7 </p> 
       <p>Date fin d'exploitation: $description_p8 </p> 
 
        </td>

				<td class='text-center'>
        $cat_p, $cat_p2,$cat_p3</td>
     
				<td class='text-center'><img src='images/$image' style='width:350px; height:160px;'></td>
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-pencil' style='color:grey;' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
						<a href='#'>
						     <i class='fa fa-trash' style='color:grey;'  data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>

			
			
		</table>
	</div>



	
	
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Ajouter produit</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">


        	<div class="form-group">
        		<label>ID</label>
        		<input type="text" name="id" class="form-control" placeholder="Saisir id du produits">
        	</div>

        	<div class="form-group">
        		<label>Nom du produit</label>
        		<input type="text" name="nom_p" class="form-control" placeholder="Saisir nom du produits">
        	</div>
<!--
        	<div class="form-group">
        		<label>Description</label>
        		<input type="text" name="description_p" class="form-control" placeholder="Saisir la description du produits">
        	</div>
-->
      <div class="form-group">
    <label for="exampleFormControlSelect2">Type photo</label>
    <select name="description_p"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>Passion froid</option>
      <option>Photo fournisseur</option>
    </select></div>

      <div class="form-group">
    <label for="exampleFormControlSelect2">type</label>
    <select name="description_p2"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>Produit</option>
      <option>Humain</option>
    </select></div>

      <div class="form-group">
    <label for="exampleFormControlSelect2">Institutionel?</label>
    <select name="description_p3"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>Institutionel</option>
      <option>non-institutionel</option>
    </select></div>

      <div class="form-group">
    <label for="exampleFormControlSelect2">Format</label>
    <select name="description_p4"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>Vertical</option>
      <option>Horizontal</option>
    </select></div>

      <div class="form-group">
            <label>Auteur</label>
            <input type="text" name="description_p5" class="form-control" placeholder="Saisir nom du produits">
          </div>

      <div class="form-group">
    <label for="exampleFormControlSelect2">Utilisation</label>
    <select name="description_p6"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>limité</option>
      <option>ilimité</option>
    </select></div>

      <div class="form-group">
    <label for="exampleFormControlSelect2">Copyright</label>
    <select name="description_p7"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>oui</option>
      <option>non</option>
    </select></div>

    <div class="form-group">
    <label>Date fin exploitation</label>
   <input type="text" name="description_p8" class="form-control" placeholder="Saisir nom du produits">
    </div>



 <!--
        	<div class="form-group">
        		<label>Catégorie</label>
        		<input type="text" name="cat_p" class="form-control" placeholder="Saisir la catégorie du produits">
        	</div>

-->

  <div class="form-group">
    <label for="exampleFormControlSelect2">Tag 1</label>
    <select name="cat_p"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>Chaud</option>
      <option>Froid</option>
      <option>Legumes</option>
      <option>Fruits</option>
      <option>Viandes</option>
    </select></div>

    <div class="form-group">
    <label for="exampleFormControlSelect2">Tag 2</label>
    <select name="cat_p2"  multiple class="form-control" id="exampleFormControlSelect2">
       <option>Chaud</option>
      <option>Froid</option>
      <option>Legumes</option>
      <option>Fruits</option>
      <option>Viandes</option>
    </select>
</div>

<div class="form-group">
    <label for="exampleFormControlSelect2">Tag 3</label>
    <select name="cat_p3"  multiple class="form-control" id="exampleFormControlSelect2">
      <option>Chaud</option>
      <option>Froid</option>
      <option>Legumes</option>
      <option>Fruits</option>
      <option>Viandes</option>
    </select>

</div>



        	<div class="form-group">
        		<label>image</label>
        		<input type="file" name="image" class="form-control" >
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Valider">
        	
        	
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>

</form>

</div>

<?php

$get_data = "SELECT * FROM Produits";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

  
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Etes vous sur de vouloir supprimer ?</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
}


?>


<?php

$get_data = "SELECT * FROM Produits";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$nom_p = $row['nom_p'];
	$description_p = $row['description_p'];
  $description_p2 = $row['description_p2'];
  $description_p3= $row['description_p3'];
  $description_p4 = $row['description_p4'];
  $description_p5 = $row['description_p5'];
  $description_p6 = $row['description_p6'];
  $description_p7 = $row['description_p7'];
  $description_p8 = $row['description_p8'];

	$cat_p = $row['cat_p'];
  $cat_p = $row['cat_p2'];
  $cat_p = $row['cat_p3'];

	$image = $row['image'];


	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

             
        	<div class='form-group'>
        		<label>nom_p</label>
        		<input type='text' name='nom_p' class='form-control' value='$nom_p'>
        	</div>



      
            <div class='form-group'>
    <label for='exampleFormControlSelect2'>Type photo</label>
    <select name='description_p'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>Passion froid</option>
      <option>Photo fournisseur</option>
    </select></div>

      <div class='form-group'>
    <label for='exampleFormControlSelect2'>type</label>
    <select name='description_p2'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>Produit</option>
      <option>Humain</option>
    </select></div>

      <div class='form-group'>
    <label for='exampleFormControlSelect2'>Institutionel?</label>
    <select name='description_p3'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>Institutionel</option>
      <option>non-institutionel</option>
    </select></div>

      <div class='form-group'>
    <label for='exampleFormControlSelect2'>Format</label>
    <select name='description_p4'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>Vertical</option>
      <option>Horizontal</option>
    </select></div>

      <div class='form-group'>
            <label>Auteur</label>
            <input type='text' name='description_p5' class='form-control' placeholder='Saisir nom du produits'>
          </div>

      <div class='form-group'>
    <label for='exampleFormControlSelect2'>Utilisation</label>
    <select name='description_p6'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>limité</option>
      <option>ilimité</option>
    </select></div>

      <div class='form-group'>
    <label for='exampleFormControlSelect2'>Copyright</label>
    <select name='description_p7'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>oui</option>
      <option>non</option>
    </select></div>

    <div class='form-group'>
    <label>Date fin exploitation</label>
   <input type='text' name='description_p8' class='form-control' placeholder='Saisir nom du produits'>
    </div>







  
        	  <div class='form-group'>
    <label for='exampleFormControlSelect2'>Example multiple select</label>
    <select name='cat_p'  multiple class='form-control' id='exampleFormControlSelect2'>
      <option>chaud</option>
      <option>froid</option>
      <option>legumes</option>
      <option>viandes</option>
      <option>surgelé</option>
    </select></div>

    <div class='form-group'>
    <label for='exampleFormControlSelect2'>Example multiple select</label>
    <select name='cat_p2'  multiple class='form-control' id='exampleFormControlSelect2'>
   <option>chaud</option>
      <option>froid</option>
      <option>legumes</option>
      <option>viandes</option>
      <option>surgelé</option>
    </select>
</div>

<div class='form-group'>
    <label for='exampleFormControlSelect2'>Example multiple select</label>
    <select name='cat_p3'  multiple class='form-control' id='exampleFormControlSelect2'>
       <option>chaud</option>
      <option>froid</option>
      <option>legumes</option>
      <option>viandes</option>
      <option>surgelé</option>
    </select>

</div>

        	<div class='form-group'>
        		<label>Image</label>
        		<input type='file' name='image' class='form-control' required>
        		<img src = 'images/$image' style='width:500px; height:50px'>
        	</div>

        	
        	 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
        	



        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>



</br>

       <section id="footer" style="background-color: #373739; color:white; font-family: 'Brush Script MT', cursive;  font-size:20px;  " >
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 style="text-decoration: underline">PRODUITS</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a style="color:white;" href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Cocktail</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Charcuterie</a></li>
          
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Entrée</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 style="text-decoration: underline">RECETTES</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a style="color:white;" href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Trouver une recette</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Recettes par thème</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Voir toutes les recettes</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Recettes restauration collective</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Recettes par type de plats</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 style="text-decoration: underline";>PASSIONFROID</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Notre metier</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Notre actualité</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Nos partenarias</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-angle-double-right"></i>Nous rejoindre</a></li>
                        <li><a style="color:white;"href="https://www.passionfroid.fr/" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Groupe pomona</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li style="color:white;"class="list-inline-item"><a style="color:white;" href="https://www.passionfroid.fr/"><i class="fa fa-facebook"></i></a></li>
                        <li style="color:white;"class="list-inline-item"><a style="color:white;" href="https://www.passionfroid.fr/"><i class="fa fa-twitter"></i></a></li>
                        <li style="color:white;"class="list-inline-item"><a style="color:white;" href="https://www.passionfroid.fr/"><i class="fa fa-instagram"></i></a></li>
                        <li style="color:white;"class="list-inline-item"><a style="color:white;"href="https://www.passionfroid.fr/"><i class="fa fa-google-plus"></i></a></li>
                        <li style="color:white;"class="list-inline-item"><a style="color:white;" href="https://www.passionfroid.fr/" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <hr>
            </div>  
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a style="color:white;"  href="https://www.passionfroid.fr/">Passion froid</a></u> Créé en 1912, le Groupe Pomona est aujourd'hui le leader national de la distribution livrée de produits destinés aux professionnels de la restauration et des commerces spécialisés de proximité.</p>
                   
                </div>
                <hr>
            </div>  
        </div>
    </section>
  

</body>
</html>