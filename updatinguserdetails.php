<?php 
include("session.php");
$info ="";
function displayUser($conn, $login_user) {
    $sql = "SELECT CustomerID, Username, Password, FirstName, LastName, Email FROM User
    WHERE CustomerID = '$login_user' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    return $row;
}
function updateUser($conn, $login_user) {
$myusername =mysqli_real_escape_string($conn,$_POST["txtUsername"]);
$myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstName"]);
$mylastname = mysqli_real_escape_string($conn,$_POST["txtLastName"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);

$sql = "UPDATE User SET Username = '$myusername', FirstName = '$myfirstname', LastName = '$mylastname', Email =
'$myemail' WHERE CustomerID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
    $info = "Updated User successfully ";
    header("Location: profile.php");
} else {
    $info = "Error updating User: ". mysqli_error($conn);
}
return $info;
}
function deleteUser($conn, $login_user) {
$sql = "DELETE FROM User WHERE CustomerID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
    $info = "User deleted successfully";
header("Location: logout.php");
} else {
    $info = "Error deleting User: " . mysqli_error($conn);
}
return $info;
}
if(isset($_POST["update"])){
    $info = updateUser($conn, $_SESSION["login_user"]);
    $row = displayUser($conn, $_SESSION["login_user"]);
}
else if (isset($_POST["delete"])){
    $info = deleteUser($conn, $_SESSION["login_user"]);
}
else
{
    $row = displayUser($conn, $_SESSION["login_user"]);
}
mysqli_close($conn);

?>