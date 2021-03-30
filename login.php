<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <h1>SHOPSHOCK</h1>
    <h2>กรุณากรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</h2>
    <form action="verified.php" method="post">
            <table>
            <tr>
                <td>username:</td><td><input type="text" name="user" id="" require></td>
            </tr>
            <tr>
                <td>password:</td><td><input type="text" name="pass" id="" require></td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr><td colspan="2" align="center">
            <button Type="submit">Submit</button>
            <button type="reset">Reset</button>
            <a href="register.php"> <input type="button" value="Register"></a>
            </td></tr>
    </form>
    </table>
    </center>
</body>
</html>