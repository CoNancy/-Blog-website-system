<form action="new1.php" method="post">
 
Name:<input type="text" name="fname">
 
<br />
 
Age:<input type="text" name="age">
 
<br />
 
<input type="submit" >
 
</form>
 
<?php
$a=$_POST['fname'];
 
$b=$_POST['age'];
 
echo $a."<br />";
 
echo $b."<br />";
?>
