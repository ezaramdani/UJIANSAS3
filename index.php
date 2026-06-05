<?php

include 'koneksi.php';

if(isset($_POST['simpan'])) {
    mysqli_query ($koneksi, "insert into tb_users set
    username ='$_POST[username]',
    email ='$_POST[email]',
    password ='$_POST[password]'"
    );

    header("location: beranda.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>silahkan login</h3>
        <form method="post">
            <label>NAME:</label>
            <input type="text" name="username" id="" require><br><br>
            <label>EMAIL:</label>
            <input type="email" name="email" id="" require><br><br>
            <label>PASSWORD:</label>
            <input type="password" name="password" id="" require><br><br>
            <input type="submit" value="input" name="simpan" ><br><br>
        </form>
    </center>
</body>
</html>

