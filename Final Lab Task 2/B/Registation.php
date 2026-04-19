<?php
    session_start();

    // Session logic provided in your snippet
    if (!isset($_SESSION['status']) && isset($_COOKIE['status'])) {
        $_SESSION['status'] = true;
        if (isset($_COOKIE['user_name'])) {
            $_SESSION['user_name'] = $_COOKIE['user_name'];
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td style="border-right: none;">
                <h1 style="display: inline; color: green;">X</h1>
                <h2 style="display: inline;">Company</h2>
            </td>
            <td align="right" style="border-left: none;">
                <a href="public_home.php">Home</a> | 
                <a href="login.php">Login</a> | 
                <a href="registration.php">Registration</a>
            </td>
        </tr>

        <tr height="400px">
            <td colspan="2" align="center">
                <form method="POST" action="regCheck.php">
                    <fieldset style="width: 400px; text-align: left;">
                        <legend><b>REGISTRATION</b></legend>
                        <table width="100%">
                            <tr>
                                <td>Name</td>
                                <td>: <input type="text" name="name" value=""></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Email</td>
                                <td>: <input type="email" name="email" value=""> <b>i</b></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>User Name</td>
                                <td>: <input type="text" name="userName" value=""></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Password</td>
                                <td>: <input type="password" name="password" value=""></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>: <input type="password" name="confirmPassword" value=""></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                        <input type="radio" name="gender" value="Other"> Other
                                    </fieldset>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="text" name="day" size="2"> /
                                        <input type="text" name="month" size="2"> /
                                        <input type="text" name="year" size="4"> 
                                        <i>(dd/mm/yyyy)</i>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright © 2017
            </td>
        </tr>
    </table>
</body>
</html>