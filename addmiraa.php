<?php
// initializing variables
$username = "";
$email    = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'miraa');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  $quantity= mysqli_real_escape_string($db, $_POST['quantity']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   $filename=$_FILES['uploadfile']['name'];

  if (empty($price)) { array_push($errors, "price is required"); 
  header('location:addmiraap.php');

}
  if (empty($quantity)) { array_push($errors, "quantity is required");
   header('location:addmiraap.php');

   }

 if (empty($filename)) { array_push($errors, "image is required");
  header('location:addmiraap.php'); }

 if (count($errors) == 0) {

 
  
 

$filetmpname=$_FILES['uploadfile']['tmp_name'];
$folder='images/';


move_uploaded_file($filetmpname, $folder.$filename);



  	$query = "INSERT INTO product (price, category, description,quantity,image) 
  			  VALUES('$price', '$category', '$description','$quantity','$filename')";

          
  	mysqli_query($db, $query);
  	
  	header('location:index.php');
  }
}
echo "<script>
alert('fill all field please');

</script>";



?>