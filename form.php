
<?php
/*
include("header.php");

*/?><!--<br>

<?php
/*if (isset($_GET["error"])){
    echo "<p style=\"color:red;\">Voer alle gegevens in a.u.b.</p>";
}
*/?>


<form action="001Testpagina.php" method="POST">
    <input type="text" name="name"  placeholder="Name"><br>
    <input type="text" name="addres"  placeholder="Addres"><br>
    <input type="email" name="email"  placeholder="Email"><br>
    <input type="password" name="wachtwoord"  placeholder="Wachtwoord"><br>
<input type="submit" >

</form>




    --><?php
/*
include("footer.php");

*/?>

<?php

include("header.php");

?><br>


<Form action="001Testpagina.php" method="POST">
    <input type="text" name="naam" value=""><br>
    <input type="text" name="adres" value=""><br>
    <input type="email" name="email" value=""><br>
    <input type="password" name="wachtwoord" value=""><br>
    <input type="submit" name="verzenden">

</Form>

 <?php

include("footer.php");

?>


<!--


<html>
<?php
/*
    include("header.php");
echo "Hello form!";
*/?>
<form action="001Testpagina.php" method="GET">
    inlognaam <input type="text" name="inlognaam" value="">
    wachtwoord <input type="password"  name="wachtwoord" value="">
    <input type="submit" name="knop" value="verstuur">

</form>


<?php
/*
    include("footer.php");

*/?>



<Head>
  <link rel="stylesheet" type="text/css" href="mystyle.css"
</Head>

<body>



</body>





</html>-->
<!--
--><?php
/*$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);*/