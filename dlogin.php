<?php
$con = mysqli_connect("localhost","root","","test");
$gr = $_POST['uname'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$room = $_POST['email'];
$pwd = $_POST['pwd'];

if(!$con)
{
echo "Failed To Connect <br>".mysqli_connect_error();
}
$sql = "INSERT INTO dlogin (uname,name,phone,email,pwd) values ('$gr','$name','$phone','$room','$pwd')";
;

if(mysqli_query($con,$sql))
{
?>
<script>
var mess = "Registration Done";
alert(mess);
</script>
<?php
    header("Location: 5.php");
}
else
{
echo "Error <br>".mysqli_error($con);
}
mysqli_close($con);
?>