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
    }

    // Static data for demonstration (In a real app, these come from a Database or Session)
    $name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Bob";
    $email = "bob@aiub.edu";
    $gender = "Male";
    $dob = "19/09/1998";
    $profilePic = "user.png"; // Placeholder for the image file
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
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
                <fieldset>
                    <legend><b>PROFILE</b></legend>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="60%" valign="top">
                                <table width="100%" cellpadding="5">
                                    <tr>
                                        <td width="40%">Name</td>
                                        <td>: <?php echo $name; ?></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>: <?php echo $email; ?></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>: <?php echo $gender; ?></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>: <?php echo $dob; ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td align="center" valign="top">
                                <img src="user_icon.png" alt="Profile Picture" width="100"><br>
                                <a href="change_profile_pic.php">Change</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                                <a href="edit_profile.php">Edit Profile</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
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