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

    // Dummy data for display (In a real app, fetch from DB or Session)
    $name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Bob";
    $email = "bob@aiub.edu";
    $gender = "Male";
    $dob = "23/12/1999";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
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
                <form method="POST" action="editCheck.php">
                    <fieldset>
                        <legend><b>EDIT PROFILE</b></legend>
                        <table width="100%" cellpadding="5">
                            <tr>
                                <td width="30%">Name</td>
                                <td>: <input type="text" name="name" value="<?php echo $name; ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Email</td>
                                <td>: <input type="email" name="email" value="<?php echo $email; ?>"> <b>i</b></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Gender</td>
                                <td>: 
                                    <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
                                    <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
                                    <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>> Other
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>: <input type="text" name="dob" value="<?php echo $dob; ?>"> <br>
                                    <font size="2">&nbsp;&nbsp;<i>(dd/mm/yyyy)</i></font>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
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