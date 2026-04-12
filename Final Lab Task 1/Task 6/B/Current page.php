<?php
    if(isset($_REQUEST['submit'])){

        $blood = $_REQUEST['blood'];

        if($blood == ""){
            echo "null input!";
        }else{
            echo "Selected Blood Group: ".$blood;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group Form</title>
</head>
<body> 

<form method="post" action="">
    BLOOD GROUP <br><br>

    <select name="blood">
        <option value="">Select</option>
        <option value="A+" <?php if(isset($_POST['blood']) && $_POST['blood']=="A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if(isset($_POST['blood']) && $_POST['blood']=="A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if(isset($_POST['blood']) && $_POST['blood']=="B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if(isset($_POST['blood']) && $_POST['blood']=="B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if(isset($_POST['blood']) && $_POST['blood']=="O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if(isset($_POST['blood']) && $_POST['blood']=="O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if(isset($_POST['blood']) && $_POST['blood']=="AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if(isset($_POST['blood']) && $_POST['blood']=="AB-") echo "selected"; ?>>AB-</option>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>