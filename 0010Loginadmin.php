<?php include("staticphp/header.php"); ?>

<?php
$users = array(
    "bob" => "bob",
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
);
function checkifloggedin($users)
{
    if (isset($_POST["button"])
        && isset($users[$_POST["email"]])
        && $users[$_POST["email"]] == $_POST["pwd"]
    ) {
        $bool = TRUE;
    } else {
        $bool = FALSE;
    }
    return $bool;
}
$message = checkifloggedin($users) ? "Welkom!!!" : "Sorry, geen toegang!";
?>

    <div id="container">

        <div class="box" id="bluebox">
            <h1><?php echo $message; ?></h1>
        </div>

        <div class="box" id="redbox">
            <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST">
                <label for="email">Email:</label>
                <input type="text" name="email" value="">
                <label for="pwd">Wachtwoord:</label>
                <input type="password" name="pwd" value="">
                <input type="submit" name="button" value="Submit">
            </form>
        </div>

    </div>

<?php include("staticphp/footer.php"); ?>