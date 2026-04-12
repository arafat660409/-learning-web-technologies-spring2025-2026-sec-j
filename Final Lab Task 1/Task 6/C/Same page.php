<?php
    $blood = "";

    if(isset($_REQUEST['submit'])){

        $blood = $_REQUEST['blood'];

        if($blood == ""){
            echo "null input!";
        }else{
            echo "Selected Blood Group: ".$blood."<br><br>";
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
        <option value="A+" <?php if($blood=="A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if($blood=="A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if($blood=="B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if($blood=="B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if($blood=="O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if($blood=="O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if($blood=="AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if($blood=="AB-") echo "selected"; ?>>AB-</option>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>