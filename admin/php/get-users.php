<?php include("../include/db_conn.php");$sql=mysqli_query($conn,"SELECT * FROM `registeruser` WHERE email != 'admin@gmail.com'");$clutter="";if(mysqli_num_rows($sql)>0){foreach($sql as $row){$clutter.="\n        <tr>\n            <td>".$row['id']."</td>\n            <td>".$row['name']."</td>\n            <td>".$row['email']."</td>\n            <td>".$row['phone']."</td>\n            </td>\n        </tr>\n        ";}echo $clutter;}else{echo "\n    <tr>\n    <td colspan='6'>No Record Found</td>\n    </tr>\n    ";} ?>