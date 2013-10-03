         <?php
   
               
    include("conexion.php");

   if(isset($_REQUEST['Name']) && !empty($_REQUEST['Name'])&&     

    isset($_REQUEST['Pass']) && !empty($_REQUEST['Pass'])&&   

    isset($_REQUEST['UserName']) && !empty($_REQUEST['UserName'])&&     

    isset($_REQUEST['rol']) && !empty($_REQUEST['rol'])) 
    {
      $con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
      mysql_select_db($db,$con)or die("problemas al conectar la bd");
      
      
 $roles=$_POST['rol'];

   
      mysql_query("INSERT INTO usuarios(nombre,contrasenia,usuario,roles_id) 
VALUES ('$_REQUEST[Name]','$_REQUEST[Pass]','$_REQUEST[UserName]','$roles')",$con);
Include("newuser.php");  
     echo "<h1> DATOS GUARDADOS EXITOSAMENTE...!!</h1>";
   }
 else
   {
    Include("newuser.php");
     echo "<h1>NO SE GUARDARON LOS DATOS</h1>";
    }

?>
  