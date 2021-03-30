<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <fieldset><legend><b>ShopShock Member Register</b></legend>
    <center>
        ______________________________________________________<br><br>


        <form action="db.php" method="post">
        <table>
        <tr>
            <td>Name:</td><td><input type="text" name="user" id="" require></td>
        </tr>
        <tr>
            <td>NickName:</td><td><input type="text" name="name" id="" require></td>
        </tr>
        <tr>
            <td>Password:</td><td><input type="text" name="pass" id="" require></td>
        </tr>
        <tr>
            <td>ConfirmPassword:</td><td><input type="conpass" name="pass" id="" require></td>
        </tr>
        <tr></tr>
        </table>  
        </form>
        ______________________________________________________<br><br>
        <tr><td colspan="2">
            <button Type="submit">Submit</button>
            <button type="reset">Reset</button>
        </td></tr>
        </center>  
    </fieldset>     

    </table>
    <?php
        include_once "db.php";
        function add_data(){
            $mydb = new db("root","","member");
            $data = $mydb->query("INSERT INTO 'member'('name','user','password','type')
            VALUES ('{$data['user']}','{$data['name']}','{$data['pass']}')");
            $mydb->close();
            return $data;
        }
    ?>
</body>
</html>