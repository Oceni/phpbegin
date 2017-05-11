


<?php
/*
if(!isset($_POST['name'], $_POST['age'])){

    $name=$_REQUEST['name'];
    $age=$_REQUEST['age'];
    echo $name." and" .$age." are avaible";
}

*/?>


<?php
/*$name = $_POST["name"];
$addres = $_POST["addres"];
$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];
if($name=="" || $addres=="" || $email=="" || $wachtwoord==""){
    header("Location: form.php?error");
}else{
    echo "Uw Naam : ".$name."<br>";
    echo "Uw Adres : ".$addres."<br>";
    echo "Uw Email : ".$email."<br>";
    echo "Uw Wachtwoord : ".$wachtwoord."<br>";
}


*/?>





<?php

include("header.php");
?>

<?php

$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);


// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr= "";
$name = $email = $website = $comment= $gender=  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["naam"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["naam"]);
    }

    if (empty($_POST["adres"])) {
        $emailErr = "Adres is required";
    } else {
        $email = test_input($_POST["adres"]);
    }

    if (empty($_POST["email"])) {
        $websiteErr = "Email is required";
    } else {
        $website = test_input($_POST["email"]);
    }

    if (empty($_POST["wachtwoord"])) {
        $commentErr = "Wachtwoord is required";
    } else {
        $comment = test_input($_POST["wachtwoord"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="naam">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    adres: <input type="text" name="adres">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>
    Wachtwoord: <input type="password" name="wachtwoord">
    <span class="error">* <?php echo $commentErr;?></span>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php
include("footer.php");
?>

























<!--





<html>
<?php
/*
    include("header.php");


$messages= array();
if(!isset($_GET["ïnlognaam"])&& !isset($_GET["wachtwoord"])){

    $messages[]= "de inlognaam en de wachtwoord moet ingevuld worden";

}else if(strlen($_GET["inlognaam"])<2){

   $messages[]= "Een naam moet minimaal 2 letters bevatten";
}else if(strlen($_GET["wachtwoord"])<3){

    $messages[]="Een wachtwoord moet minimaal 2 letters bevatten";
}



if(!count ($messages)==0) {
    // als messages niet geteld zijn weergeven
    //mesages weergeven

    $html="<ul>";
    foreach($messages as $message){
        $html.="<li>".$message."</li>";
        // dit betekent html is een lege string als ik een messages
        // tegen kom word het aan de lege string toegevoegd
    }

    $html.="</ul>";
    echo $html;
}else{

    echo "Welkom my brother meesterplusser" . $_GET["inlognaam"];


    */?>


    <div style="background-color:<?php /*echo $_GET["wachtwoord"]; */?>; height:200px; width:200px"</div>

    <?php
/*}
    include("footer.php");

*/?>

    <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css";
    </head>


    <body>

    </body>

    </html-->