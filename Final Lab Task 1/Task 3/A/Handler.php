<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOB Form</title>
</head>
<body>

<form method="post" action="handler.php">
    DATE OF BIRTH <br><br>

    <input type="text" name="dd" size="2"/> /
    <input type="text" name="mm" size="2"/> /
    <input type="text" name="yyyy" size="4"/> <br><br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
<?php
    if(isset($_REQUEST['submit'])){

        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            echo "null input!";
        }else{
            echo "Your DOB: ".$dd."/".$mm."/".$yyyy;
        }
    }
?>