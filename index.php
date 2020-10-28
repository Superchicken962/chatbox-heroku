<?php
        session_start();
        $userinfo = array(
            'user'=>'5d41402abc4b2a76b9719d911017c592', //Hello...
        );

        if(isset($_GET['logout'])) {
            $_SESSION['username'] = '';
            header('Location:  ' . $_SERVER['PHP_SELF']);
        }

        if(isset($_POST['username'])) {
            if($userinfo[$_POST['username']] == md5($_POST['password'])) {
                $_SESSION['username'] = $_POST['username'];
            }else {
                header("location:403.html"); //replace with 403
            }
        }
?>
<?php if($_SESSION['username']): ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Logged In</title>
        </head>

        <body>
            <p>You're logged in.</p>
            <a href="logout.php">LOG OUT</a>
        </body>
    </html>

<?php else: ?>
    <html>
        <head>
            <title>Log In</title>
        </head>
        <body>
            <h1>Login needed</h1>
            <form name="login" action="" method="post">
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3"><strong>System Login</strong></td>
                    </tr>
                    <tr>
                        <td width="78">Username:</td>
                        <td width="294"><input name="username" type="text" id="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input name="password" type="password" id="password"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </body>
    </html>
<?php endif; ?>