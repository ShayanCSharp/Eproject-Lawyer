<?php include("../include/db_conn.php");$sql=mysqli_query($conn,"SELECT * FROM `blogs`");$clutter="";if(mysqli_num_rows($sql)>0){foreach($sql as $row){$clutter.="\n        <tr>\n            <td>".$row['id']."</td>\n            <td><img src=assets/img/blog/".$row['featured_image']."></td>\n            <td>".$row['title']."</td>\n            <td>".$row['slug']."</td>\n            <td><a href='edit-blog.php?id=".$row['id']."' class='btn btn-primary'>Edit</a></td>\n            <td>\n                <form>\n                    <button type='submit' name='delete' data-index='".$row['id']."' class='btn btn-danger'>Delete</button>\n                </form>\n            </td>\n        </tr>\n        ";}echo $clutter;}else{echo "\n    <tr>\n    <td colspan='6'>No Record Found</td>\n    </tr>\n    ";} ?>