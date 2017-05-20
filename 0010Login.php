<?php

session_start();


$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);

$formulier= array(
    "Xavier"=> array("wachtwoord"=>"7777","rol"=>"administrator"),
    "Peter"=>array("wachtwoord"=>"3344","rol"=>"gebruiker"),
    "Klaas"=>array("wachtwoord"=>"5555","rol"=>"gebruiker"),
    "Ricardo"=>array("wachtwoord"=>"8888","rol"=>"administrator")
    );
if (isset($_GET['loguit']))
{

    $_SESSION=array();
  session_destroy();
}




if (isset($_POST['knop'])

&& isset($formulier[$_POST['login']])  // kijken of gebruiker ingelogd is rn als naam bestaat
&& $formulier[$_POST['login']]['wachtwoord']==$_POST['wachtwoord']) // kijken of de waarde van login gelijk is aan de waarde van wachtwoord
{

    $_SESSION['user']=array(
        "log"=>$_POST['login'],  // login geeft de naam terug
        "wachtwoord"=>$formulier[$_POST['login']]['wachtwoord'],  // geeft de wachtwoord terug
        "rol"=>$formulier[$_POST['login']]['rol']   // geeft de rol terug
        );


    $messages= "welkom op de pagina".$_SESSION['user']['log'] .$_SESSION['user']['rol'];
}else{

    $messages= "inloggen";
}
print_r($_SESSION);
?>

<h1><?php  echo $messages; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


    <div class="form-group">
        <label for="login">login</label>
    <input type="text" name="login" value="">
    </div>

    <div class="form-group">
        <label for="wachtwoord">wachtwoord</label>
    <input type="password" name="wachtwoord" value="">
    </div>
    <input type="submit" name="knop" value="verzenden">


    <p><a href="0010Website.php"</a>website</p>;
    <p><a href="0010Login.php"</a>login</p>
    <p><a href="0010Admin.php"</a>admin</p>
<p><a href="0010Login.php?loguit">loguit</a></p>

</form>

<?php
// inlogpagina nodig
// formulier nodig
// als je inlogt moet er een voorwaarde zijn
?>




<?php

/*

session_start();

$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);


$users= array(
    "janjaap"=> array("wachtwoord"=>"1234","rol"=>"Administrator"),
    "bert"=>array("wachtwoord"=>"1235","rol"=>"Gebruiker"),
    "jans"=> array("wachtwoord"=>"1236","rol"=>"Administrator")
    );

if(isset($_GET["loguit"])){
    $_SESSION=array();
    session_destroy();
}
if(isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["wachtwoord"]==$_POST["wachtwoord"]){

    $_SESSION["gebruiker"]= array("naam"=>$_POST["login"],
        "wachtoord"=>$users[$_POST["login"]]['wachtwoord'],
        "rol"=>$users[$_POST["login"]]['rol']);

    $message="Welkom !".$_SESSION["gebruiker"]["naam"]." met de rol ".$_SESSION["gebruiker"]["rol"];

} else{
    $message="inloggen";
}

print_r($_SESSION);

*/?><!--

<html>
<body>
<h1><?php /*echo $message; */?></h1>
<form action="<?php /*echo $_SERVER['PHP_SELF']; */?>" method="post">
<div class="form-group">
 <label for="login">Login:</label>
    <input type="text" name="login" value="">
</div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" name="wachtwoord" value="">
    </div>
    <input type="submit"  name="knop">
</form>
<p><a href="001Testpagina.php">website</a></p>
<p><a href="oefen.php"</a>Admin gedeelte website</p>
<p><a href="0010Admin.php?loguit">uitloggen</a></p>
</body>

</html>





-->










<?php /*include("staticphp/header.php"); */?><!--

<?php
/*session_start();
$users = array(
    "bob" => array("pwd" => "bob", "rol" => "Administrator"),
    "job" => array("pwd" => "job", "rol" => "Gebruiker"),
    "jon" => array("pwd" => "jon", "rol" => "Administrator"),
);
if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
}
function checkifloggedin($users)
{
    if (!isset($_POST["button"])
        && empty($_POST["email"])
        || empty($_POST["pwd"])
    ) {
        $message = "Je moet eerst inloggen";
    }
    if (isset($_POST["button"])
        && isset($users[$_POST["email"]])
        && $users[$_POST["email"]]["pwd"] == $_POST["pwd"]
    ) {
        $_SESSION["user"] = array("naam" => $_POST["email"],
            "pwd" => $users[$_POST["email"]]["pwd"],
            "rol" => $users[$_POST["email"]]["rol"]
        );
        $message = "Welkom "
            . $_SESSION["user"]["naam"]
            . " met de rol "
            . $_SESSION["user"]["rol"];
    } elseif (isset($_POST["button"])
        && isset($users[$_POST["email"]])
        && isset($users[$_POST["email"]]["pwd"])
        && $users[$_POST["email"]] != $_POST["email"]
        || $users[$_POST["email"]["pwd"]] != $_POST["pwd"]
    ) {
        $message = "Onjuist email of wachtwoord";
    }
    return $message;
}
*/?>

    <div id="container">

        <div class="box" id="bluebox">
            <h1><?php /*echo checkifloggedin($users); */?></h1>
        </div>

        <div class="box" id="redbox">
            <form action="<?php /*echo $_SERVER["PHP_SELF"]; */?>" method="POST">
                <label for="email">Email:</label>
                <input type="text" name="email" value="">
                <label for="pwd">Wachtwoord:</label>
                <input type="password" name="pwd" value="">
                <input type="submit" name="button" value="Submit">
            </form>
            <ul><a href='formadmin.php'>Login pagina</a></ul>
            <ul><a href="adminwelcome.php">Website</a></ul>
            <ul><a href="adminonlywelcome.php">Admingedeelte website</a></ul>
            <ul><a href="formadmin.php?logout">Logout</a></ul>
        </div>

    </div>

//<?php// include("staticphp*//footer.php");?>