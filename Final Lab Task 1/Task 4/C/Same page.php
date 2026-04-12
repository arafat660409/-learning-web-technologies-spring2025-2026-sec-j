<?php
    $gender = "";

    if(isset($_REQUEST['submit'])){

        $gender = $_REQUEST['gender'];

        if($gender == ""){
            echo "null input!";
        }else{
            echo "Selected Gender: ".$gender."<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Form</title>
</head>
<body> 

<form method="post" action="">
    GENDER <br><br>

    <input type="radio" name="gender" value="Male"
    <?php if($gender=="Male"){echo "checked";} ?>/> Male

    <input type="radio" name="gender" value="Female"
    <?php if($gender=="Female"){echo "checked";} ?>/> Female

    <input type="radio" name="gender" value="Other"
    <?php if($gender=="Other"){echo "checked";} ?>/> Other

    <br><br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>