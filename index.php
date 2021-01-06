<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>HTML Forms</h2>
<?php
if (isset($_GET['submit'])){

    $Euro = $_GET['euro'];
    $result = ($Euro * 162.35)." "."DZ";



}
if (isset($_GET['change'])){

    $Dinar = $_GET['dinar'];
    $result2 = ($Dinar / 162.35)." "."EURO";



}
?>
<form >
    <label for="Euro">Euro</label><br>
    <input type="text"  name="euro" ><br>
    <button type="change" value="change" name="change">change</button><br>
    <label for="Dinar">Dinar (DZ)</label><br>
    <input type="text" name="dinar" value="<?php echo @$result;?>"/><br><br>
    <button type="submit" value="Submit" name="submit">Calculate</button>
</form>




</body>
</html>