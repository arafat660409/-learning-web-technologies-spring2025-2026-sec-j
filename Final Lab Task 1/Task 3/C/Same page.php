<?php
    $dd = "";
    $mm = "";
    $yyyy = "";

    if(isset($_REQUEST['submit'])){

        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            echo "null input!";
        }else{
            echo "Your DOB: ".$dd."/".$mm."/".$yyyy."<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOB Form</title>
</head>
<body> 

<form method="post" action="">
    DATE OF BIRTH <br><br>

    <input type="text" name="dd" size="2" value="<?php echo $dd; ?>" /> /
    <input type="text" name="mm" size="2" value="<?php echo $mm; ?>" /> /
    <input type="text" name="yyyy" size="4" value="<?php echo $yyyy; ?>" />

    <br><br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>