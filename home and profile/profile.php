<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">

</head>



<body>
    <?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'collegedatabase';

$conn = mysqli_connect($servername, $username, $password, $dbname);


$id = '1001';

$profile = "SELECT *
FROM userinfo
WHERE ID = '$id'
";

$prof = mysqli_query($conn, $profile);

while ($row = mysqli_fetch_assoc($prof)) {
    $name = $row["Name"];
    $email = $row["Email"];

}


?>

    <div class="topnav">
   
    <img src="logo-utm.png" >
   
    <div class="topnav-right">
    <a href="#Main" class="active">Main</a>
    <a href="#Profile">Profile</a>
    </div>
  
  </div>   
    
    <div align="right">
        <a class="one" href="index.html" >Home</a>

    </div>
    <br><br>


    <div id="profile">
        <table class="prof">     
   
        <tr><td>ID : <?php echo $id; ?></td></tr>
        <tr><td>Name : <?php echo $name; ?></td></tr>
        <tr><td>e-Mail : <?php echo $email; ?></td></tr>
            
        </table>


    </div>

    <br><br>

    <div class="proflist">
        
        <table class="list">
            <caption>List of Users</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">e-Mail</th>
                    <th scope="col">Type of User</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >0001</td>
                    <td >Abu</td>
                    <td >abu@utm.my</td>
                    <td >Student</td>
                </tr>
                <tr>
                    <td >0002</td>
                    <td >Ali</td>
                    <td >ali@utm.my</td>
                    <td >Student</td>
                </tr>
                <tr>
                    <td >0003</td>
                    <td >Jamal</td>
                    <td >jamal@utm.my</td>
                    <td >Accommodation Manager</td>
                </tr>
                <tr>
                    <td >0004</td>
                    <td >Rokiah</td>
                    <td >rokiah@utm.my</td>
                    <td >Admin</td>
                </tr>
            </tbody>
        </table>

    </div>


<script src="scripts\script.js"></script>
</body>