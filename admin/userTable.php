<?php
session_start();
 include ("connection.php");
 include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="userTable.css">
    <link rel="shortcut icon" href="logo-green.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <table>
            <caption>
                User Table
            </caption>
            <tr>
                <th>
                    User Id
                </th>

                <th>
                    Mobile No
                </th>

                <th>
                    User Name
                </th>

                <th>
                    Email
                </th>

                <th>
                    Password
                </th>
                <th>
                    Action
                </th>
            </tr>
<?php
$sql="select * from user_table";
$res=mysqli_query($con,$sql);
while($arr=mysqli_fetch_array($res)){
   $id= $arr['user_id'];

?>
           
           <tr>
                <td><?php echo $arr['user_id'];  ?>   </td>
                <td><?php echo $arr['user_mobile'];  ?></td>
                <td><?php echo $arr['user_name'];  ?></td>
                <td><?php echo $arr['user_mail'];  ?></td>
                <td><?php  echo $arr['password']; ?></td>
                <td> <div class="btnSection">
                <?php
                ?>
            <form action="user.php?id=<?php echo $id  ?>" method="post">
                <!-- <input class="btn btn-success" name="update" type="submit" value="Update" class="button"> -->
                <input  name="remove" class="btn btn-success" type="submit" value="Remove" class="button">
            </form>
        </div></td>
            </tr>
        
           
<?php
}
?>
        </table>
       
    </div>
</body>
</html>