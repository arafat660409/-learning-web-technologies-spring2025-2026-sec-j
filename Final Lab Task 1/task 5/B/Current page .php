<?php
$selected = [];

if(isset($_REQUEST['submit'])){
    if(!empty($_REQUEST['degree'])){
        $selected = $_REQUEST['degree'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Degree Form B</title>
</head>
<body>

<form method="post" action="">
    <fieldset>
        <legend>DEGREE</legend>

        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc <br><br>

        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

<?php
if(isset($_REQUEST['submit'])){
    if(empty($selected)){
        echo "No degree selected!";
    }else{
        echo "Selected Degrees:<br>";
        foreach($selected as $d){
            echo $d . "<br>";
        }
    }
}
?>

</body>
</html>