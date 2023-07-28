<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $user = "root";
    $pass = '';
    $db = "university";
    $conn = mysqli_connect($servername,$user,$pass,$db);
    if(!$conn){
        die ("Connection faild: ".mysqli_connect_error());
    }else{
        echo "Connection Successful";
    }
    $sql = "SELECT ID,Name,Email FROM students;";
    $res = $conn->query($sql);
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        if(mysqli_num_rows($res)>0){
            foreach($res as $user){
                echo "<tr><td>".$user['ID']."</td><td>".$user['Name']."</td><td>".$user['Email']."</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>