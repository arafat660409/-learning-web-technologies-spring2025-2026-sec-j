<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Form</title>
</head>
<body>

<form method="post" action="handler.php">
    EMAIL: <input type="text" name="email"/> <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
<?php
    if(isset($_REQUEST['submit'])){

        $email = $_REQUEST['email'];

        if($email == ""){
            echo "null email!";
        }else{
            echo "Your Email: ".$email;
        }
    }
?>