<?php
   
               
    include("conexion.php");
     
   if(isset($_REQUEST['name']) && !empty($_REQUEST['name'])&&     

    isset($_REQUEST['pass']) && !empty($_REQUEST['pass'])&&
    isset($_REQUEST['username']) && !empty($_REQUEST['username'])&&
    isset($_REQUEST['select1']) && !empty($_REQUEST['select1'])) 
    {
      $conexion=mysql_connect($host,$user,$pw)or die("problemas al conectar");
      mysql_select_db($db,$conexion)or die("problemas al conectar la bd");

      $roles=$_POST['select1'];

   
      mysql_query("INSERT INTO usuarios(nombre,contrasenia,usuario,roles_id) 
VALUES ('$_POST[name]','$_POST[pass]','$_POST[username]','$roles')",$conexion);
Include("newuser.php");  
     echo "<h1> DATOS GUARDADOS EXITOSAMENTE...!!</h1>";
   }
 else
   {
    Include("newuser.php");
     echo "<h1>NO SE GUARDARON LOS DATOS</h1>";
    }

?>
  