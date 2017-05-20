
<?php

function checkLogin($username, $password) {
    if($username === 'xavier' && $password === 'houdjewachtwoordaltijdgeheim') {
        return true;
    }
    else {
        return false;
    }
}

$user_logged_in = checkLogin($_POST['username'], $_POST['password']);

if($user_logged_in) {
    echo "Gelukt, je bent ingelogd.";
}
else {
    echo "Wachtwoord en/of gebruikersnaam onbekend. Je bent niet ingelogd.";
}

?>















<?php
/*


function login($naam,$wachtwoord){
    if ($naam == true && $wachtwoord==true) {
        return true;
        } else {
            return false;

        }
}
if (login(true||false)) echo login;
*/?>

<?php
/*

$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);

$users=array(

    "piet@worldonline.nl"=>"doetje123",
    "klaas@carpets.nl"=>"snoepje777",
    "truushendriks@wegweg.nl"=>"arkiearkie201"

);

if  (empty($_POST['verzenden'])
    && empty($users[$_POST["email"]])
    && $users[$_POST["email"]] == $_POST['wachtwoord']) {

    $messages= "inloggen ";
}

else if( (isset($_POST['verzenden'])
    && isset($users[$_POST["email"]])
    && $users[$_POST["email"]] == $_POST['wachtwoord']))
{$messages= "welkom";

}

else{    $messages="Sorry geen toegang";

}

*/?><!--



<html>

<head>

</head>

<body>

<h1><?php /*echo $messages; */?></h1>

<form action="<?php /*echo $_SERVER['PHP_SELF'];*/?>" method="POST">

    <div class="form-group">
        <label for="email">email:</label>
        <input type="email"  name="email"  value="">
    </div>

    <div class="form-group">
        <label for="wachtwoord">password</label>
        <input type="password" name="wachtwoord">
    </div>


    <input type="submit" name="verzenden">

</form>


</body>
</html>
-->




<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css";
</head>


<body>

</body>

</html-->

