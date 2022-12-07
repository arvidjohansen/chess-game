<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
session_start();

$isLoggedIn = true;

if($isLoggedIn) {
    header("Location: http://localhost/chesstesting/");
} else {
    echo "Feil brukerfndkjfbdsf";
}

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

echo $_SESSION["favanimal"]; 
?>

</body>
</html>