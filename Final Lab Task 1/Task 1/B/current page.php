<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "Null input!";
    }else{
        echo "Your Name is: ".$name;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form B</title>
</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="name"/> <br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>