<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>HTML Forms</h2>
<?php
if (isset($_GET['submit'])){
        $Dinar = $_GET['dinar'];
        $Euro = $_GET['euro'];
      echo  $result = ((float)$Euro * 162.35) . " " . "DZ";
       echo $result2 = ((float)$Dinar / 162.35)." "."EURO";


}

?>
<form >

    <input type="text"  name="euro" value="<?php echo $result2; ?>""<br>
    <button type="submit" value="Submit" name="submit" style = "border: none; color : white;"><i class="fa fa-exchange" style="font-size:15px;color:red;"></i> </button>
    <input type="text" name="dinar" value="<?php echo $result; ?>"/><br><br>



</form>

</body>
</html>