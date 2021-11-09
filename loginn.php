
   <?php
   require("conexion.php");
    session_start();
$nopagan;
   $username=$_POST["username"];
   $password=$_POST["password"];

   global $username,$password,$pdo, $_SESSION;    
  
  $sql = "SELECT * FROM us where user='$username' and contra='$password' "; 
  $query = $pdo-> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetch(PDO::FETCH_OBJ); 
  if($query -> rowCount() > 0){
    $_SESSION['username']=$username;

    if(isset($_SESSION)) 
    { 
        session_start(); 
        echo "<script> window.location='perfil.php'; </script>";
    } 
     
  
     
  }else{

    echo "<script> window.location='index.php'; </script>";
      
  }

  
  

  
  unset($pdo);

  ?>