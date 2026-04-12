<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group Form</title>
</head>
<body>

<form method="post" action="handler.php">
    BLOOD GROUP <br><br>

    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
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