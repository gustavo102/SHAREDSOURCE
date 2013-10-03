<html>
<?php
include("seguridad.php");
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="all,follow" />

    <meta name="author" lang="en" content="All: Your name [www.url.com]; e-mail: info@url.com" />
    <meta name="copyright" lang="en" content="Webdesign: Nuvio [www.nuvio.cz]; e-mail: ahoj@nuvio.cz" />

    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />

    <title>Nuevo C&oacutedigo</title>
    
</head>

<body>

<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="tmp/logo.png" alt="" /></a></h1>
        <hr class="noscreen" />

        <!-- Navigation -->
        <div id="nav">
             <a href="logout.php?cerrar"id="nav-active">Cerrar sesi&oacuten</a> <span>|</span>
            
            
        </div> <!-- /nav -->

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul>
            <li id="tray-active"><a href="mainpage.php">Bienvenidos</a></li> <!-- Active page -->
            <li><a href="newcode.php">Nuevo C&oacutedigo</a></li>
           <li><a href="firstConsulta.php">C&oacutedigos Guardados</a></li>
        </ul>
        
        <!-- Search -->
        <div id="search" class="box">
            <form action="#" method="get">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" name="ide" value="Buscar: " /></div>
                    <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
 
    <div id="col" class="box">


 <form action="insertarUs.php" method="POST">
    <center><table>
        
              

         <tr>
            <td><span><label for="filename" font-size: 13px>Nombre Completo:</label></span></td>
            <td><span><input  name="Name"  type="text" width="220px"/></span></td>
        </tr>
        <tr>
            <td><span><label for="filename" font-size: 13px>Contraseña:</label></span></td>
            <td><span><input  name="Pass"  type="password" width="220px"/></span></td>
        </tr>

         <tr>
            <td><span><label for="filename" font-size: 13px>Nombre de Usuario:</label></span></td>
            <td><span><input  name="UserName"  type="text" width="220px"/></span></td>
        </tr>

         
         <tr>
            <td><span><label for="filename" font-size: 13px>Roles:</label></span></td>
            <td><select name="rol">
            <option Value="1">Administrador</option>
            <option Value="2">Usuario</option>
            </select> </td>
        </tr>
      
      <tr>
      <td><input type="submit" value="Guardar Datos"> </td></tr>
            
    </tr>
    </table></center>
   
 <div id="col-browsr"></div> 

        
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>
    
    <hr class="noscreen" />
    </form>
    
<!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p clss="f-right"><a href="index.php">P&aacutegina Web</a> presentada por <a href="index.php">5to Semestre de Ingenier&iacutea en Computaci&oacuten</a></p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacutenoma de Tlaxcala</strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>
