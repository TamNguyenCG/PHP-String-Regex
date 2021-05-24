<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Validate Phone Number</title>
    <style>
        h1{
            color: red;
        }
        h2{
            color: blue;
        }
    </style>
</head>
<body>
<h1>Check Validate Phone Number</h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Input phone number:</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Check"</td>
        </tr>
    </table>
</form>
<?php
if ($_POST) {
    $input = $_POST["phone"];

    $pattern = "/^\d{2}-[0]\d{9}$/";

    if(preg_match($pattern,$input)){
        echo "<h2>Validate Phone Number</h2><br>";
    }else{
        echo "<h2>Unvalidated Phone Number</h2><br>";
    }
}

?>
</body>
</html>
