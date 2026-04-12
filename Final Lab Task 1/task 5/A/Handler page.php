<!DOCTYPE html>
<html>
<head>
    <title>Degree Form A</title>
</head>
<body>

<form method="post" action="handler.php">
    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc <br><br>

        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
<?php
if(isset($_REQUEST['submit'])){

    if(empty($_REQUEST['degree'])){
        echo "No degree selected!";
    }else{
        echo "Selected Degrees: <br>";
        foreach($_REQUEST['degree'] as $d){
            echo $d . "<br>";
        }
    }
}
?>