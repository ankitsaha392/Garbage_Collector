<?php
    session_start();
    include("check_validity.php");
    include ("connection.php");
    include("header.php");
?>
    <main>
        <h1 class="section1">
            User Details Information
        </h1>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Sl No. </th>
                <th scope="col">User Id</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Name</th>
            
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $i=1;
                        $qry="SELECT * FROM `user_table`";
                        $data=mysqli_query($con,$qry);
                        while($arr=  mysqli_fetch_array($data)){ ?>
                        <tr>
                        <th scope="row"><?php echo $i; ?></th>
                            <td><a href="user_order.php?user_id=<?php echo $arr["user_id"]; ?>"><?php echo $arr["user_id"]; ?></a></td>
                            <td><?php echo $arr["user_mobile"]; ?></td>
                            <td><?php echo $arr["user_name"]; ?></td>
                
                            <td><?php echo $arr["user_mail"]; ?></td>
                            <td><?php echo $arr["password"]; ?></td>
                            
                            <?php $i++; ?>
                        <?php  } ?>
                        </tr>
            </tbody>
        </table>

    </main>



<?php

    include("footer.php");
?>