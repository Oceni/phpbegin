<?php include("staticphp/header.php"); ?>

<?php
session_start();
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
?>

    <div id="container">

        <div class="box" id="bluebox">
            <h1><?php echo checkifloggedin($users); ?></h1>
        </div>

        <div class="box" id="redbox">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
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

<?php include("staticphp/footer.php"); ?>