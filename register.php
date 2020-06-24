<?php
    $host = "localhost";
    $dbname = "a_farm";
    $user = "root";
    $pass = "";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwd = password_hash($password,PASSWORD_DEFAULT);
        try{
            $DBH = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
            $DBH->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $STH = $DBH->prepare("INSERT INTO test(uname,email,passwd) values(?,?,?)");
            $STH->bindParam(1,$name);
            $STH->bindParam(2,$email);
            $STH->bindParam(3,$passwd);
            $result = $STH->execute();
            echo $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    else{
        echo "<p>Fill the form first</p>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" size="25" /></td>
                </tr>
                
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" size="25" /></td>
                </tr>
                
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" size="25" /></td>
                </tr>
                <input type="submit" value="submit" name="submit"/>
            </table>
        </form>
    </body>
</html>