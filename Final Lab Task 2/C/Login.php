<?php
    session_start();

    // Session and Cookie logic from your snippet
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
    <title>Login</title>
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

        <tr height="300px">
            <td colspan="2" align="center">
                <form method="POST" action="loginCheck.php">
                    <fieldset style="width: 350px; text-align: left;">
                        <legend><b>LOGIN</b></legend>
                        <table width="100%">
                            <tr>
                                <td>User Name</td>
                                <td>: <input type="text" name="userName" value=""></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>: <input type="password" name="password" value=""></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="checkbox" name="rememberMe"> Remember Me <br><br>
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgot_password.php">Forgot Password?</a>
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