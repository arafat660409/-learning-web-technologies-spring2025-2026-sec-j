<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Form</title>
</head>
<body>

<form method="post" action="handler.php">
    GENDER <br><br>

    <input type="radio" name="gender" value="Male"/> Male
    <input type="radio" name="gender" value="Female"/> Female
    <input type="radio" name="gender" value="Other"/> Other

    <br><br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
<?php
    if(isset($_REQUEST['submit'])){

        $gender = $_REQUEST['gender'];

        if($gender == ""){
            echo "null input!";
        }else{
            echo "Selected Gender: ".$gender;
        }
    }
?>