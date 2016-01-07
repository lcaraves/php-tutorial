<?php 
if ($_REQUEST['radio']=="Rojo") {
	# code...
	setCookie('color','#ff0000',time()+60*60*24*365,"/");
}
	elseif ($_REQUEST['radio']=="Verde")
	{
    	setcookie("color","#00ff00",time()+60*60*24*365,"/");
    }
  	elseif ($_REQUEST['radio']=="Azul")
  	{
    	setcookie("color","#0000ff",time()+60*60*24*365,"/");
    }
    elseif ($_REQUEST['radio']=="Gris")
  	{
    	setcookie("color","#9A9898",time()+60*60*24*365,"/");
    }
header("location: ../index.php");
 ?>