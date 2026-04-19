<?php
    session_start();

    // Session and Cookie logic
    if (!isset($_SESSION['status']) && isset($_COOKIE['status'])) {
        $_SESSION['status'] = true;
        if (isset($_COOKIE['user_name'])) {
            $_SESSION['user_name'] = $_COOKIE['user_name'];
        }
    }

    // Redirect to login if not logged in
    if (!isset($_SESSION['status'])) {
        header('location: login.php');
        exit();
    }

    $name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Bob";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td style="border-right: none;">
                <h1 style="display: inline; color: green;">X</h1>
                <h2 style="display: inline;">Company</h2>
            </td>
            <td align="right" style="border-left: none;">
                Logged in as <a href="view_profile.php"><?php echo $name; ?></a> | 
                <a href="logout.php">Logout</a>
            </td>
        </tr>

        <tr height="300px">
            <td width="30%" valign="top">
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_profile_pic.php">Change Profile Picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>
            
            <td valign="top">
                <form method="POST" action="uploadCheck.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend><b>PROFILE PICTURE</b></legend>
                        <table>
                            <tr>
                                <td>
                                    <img src="user_icon.png" alt="Profile Picture" width="150" height="150">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="file" name="profile_pic">
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <input type="submit" name="submit" value="Submit">
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