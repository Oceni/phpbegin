
<html>
<head>
    <meta charset="UTF-8">
    <title></title>


</head>
<body>

<?php
if (isset($_GET['kan'])) {
    foreach ($_GET['beast'] as $beast) {
        print $beast;
    }
}
?>


<form action="#" method="GET">
    <select name="beast[]">
        <option value='<img src="leeuw.jpg"'>Leeuw</option>
        <option value='<img src="paard.jpg"'>paard</option>
        <option value='<img src="beer.jpg" '>beer</option>
        <option value='<img src="hond.jpg" '>hond</option>
        <option value="<img sr-=-"
    </select>
    <input type="submit" name="kan" value="verzenden">
</form>
}


</body>


</html>

