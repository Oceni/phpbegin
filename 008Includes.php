<html>
<?php
include("staticphp/header.php");
include("staticphp/functies.php");
include("staticphp/footer.php");
?>
</html>

<!--
<!doctype html>



<body>-->






<?php
$finish=['Karel'=>'Laatstealbum langleven',
    'Jan'=>'Laatstealbum tot morgen',
    'Kees'=>'Laatstealbum Ik moest werken',
    'Bas'=>'Laatstealbum komt niet uit de lucht'];

?>

<html>
<head>
    <title> Afmaken die handel</title>
</head>






<table border="1">
    <?php foreach($finish as $klaar=>$lx):?>
        <tr>

            <td><?php echo ($klaar);?></td>
            <td><?php echo  ($lx);  ?></td>

        </tr>


    <?php endforeach;?>

</table>

</body>
</html>








<!--
function muziek($one,$two){

    $one="bart";
    $one1="kees";
    $one2="Karel";
    $one3="Jan";

    $two="lang leven de flex";
    $three="lang leven de school";
    $four="pauze";
    $five="school is boring";

    $mus=$one+$two;
    $mus1=$one1+$three;
    $mus2=$one2+$four;
    $mus3=$one3+$five;

    $muziek=array($mus,$mus1,$mus2,$mus3);

    return $muziek;
}

echo "result=".$muziek();
-->