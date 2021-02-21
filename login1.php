<?php
$con = mysqli_connect("localhost","root","","test");
session_start();
$un = $_POST['uname'];
$pw = $_POST['pwd'];

if(!$con)
{
echo "Failed To Connect <br>".mysqli_connect_error();
}
$sql1 = "SELECT * FROM signup WHERE grno = '$un' and pwd = '$pw'";
$sql2 = "SELECT * FROM dlogin WHERE uname = '$un' and pwd = '$pw'";
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
if($count1 == 1)
{
    while($row = mysqli_fetch_array($result1)) 
{
    $npwd = $row['name'];
}
}
else if($count2 == 1)
{
    while($row = mysqli_fetch_array($result2)) 
    {
        $npwd = $row['name'];
    }
}
else
{


}



if($count1 == 1)
{
    $_SESSION["Cname"] = $npwd;
    $_SESSION["C1name"] = $un;
    header("Location: cart.php");
}
else if($count2 == 1)
{
    



    $_SESSION["Dname"] = $npwd;
    header("Location: 7.php");
}
else if($un = 'admin' || $pw = 'admin')
{
    header("Location: 5.php");
}
else
{
echo "Error <br>".mysqli_error($con);
}
mysqli_close($con);
?>