<html>
<head></head><body>
<hr><hr>

<font size="6">
<?php
$name = $_POST["name"];
$pass = $_POST["pass"];
$userid = $_POST["userid"];

$conn=new mysqli("localhost","root","","collegemanagement");

$stmt=$conn->prepare("insert into flogin (name,userid,password) value(?,?,?) ");
$stmt->bind_param("sss", $name,$userid,$pass);
$stmt->execute();
$stmt->close();
?>
<script>
alert("Registration Successfull........");
</script>
<?php
include("facultyportal.php")
?>

<hr><hr>
</font>
</body>
</html>