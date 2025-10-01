<html>
<form acrion="morse.php" method="get">
    messaggio da convertire
    <br>
    <input type="text" name="n">
    <br>
    <br>
    <button type="submit" >converti</button>
    <br>
    <br>
    <input type="text" name="m" disabled >
</form>
<?php
    $n = $_GET["n"];
    $m = $_GET["m"];
?>
</html>