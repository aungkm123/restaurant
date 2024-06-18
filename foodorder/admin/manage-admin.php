<!-- **
 *                             _ooOoo_
 *                            o8888888o
 *                            88" . "88
 *                            (| -_- |)
 *                            O\  =  /O
 *                         ____/`---'\____
 *                       .'  \\|     |//  `.
 *                      /  \\|||  :  |||//  \
 *                     /  _||||| -:- |||||-  \
 *                     |   | \\\  -  /// |   |
 *                     | \_|  ''\---/''  |   |
 *                     \  .-\__  `-`  ___/-. /
 *                   ___`. .'  /--.--\  `. . __
 *                ."" '<  `.___\_<|>_/___.'  >'"".
 *               | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *               \  \ `-.   \_ __\ /__ _/   .-` /  /
 *          ======`-.____`-.___\_____/___.-`____.-'======
 *                          /   `=---='
 *          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
                            * by akm -->

<?php 
include('partials/menu.php');
?>



<!-- Main Content Section Starts !-->
<div class="main-content">
<div class="wrapper">
   <h1>Manage Admin</h1>

   <br>
   
   <?php
   if(isset($_SESSION['add']))
   {
    echo $_SESSION['add'];
    unset($_SESSION['add']);//remove session message
   }
   ?>
   <br><br><br>

   <a href="add-admin.php" class="btn-primary">Add admin</a>
   <br><br>

  <table class="tbl-full">
    <tr>
        <th>S.N</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Actions</th>
    </tr>
<!-- Button to add Admin -->

   <?php
   $sql = "SELECT * FROM tbl_admin";
   //execute query

   $res = mysqli_query($conn, $sql);

   //check whether the query is executed or not
   if($res==TRUE)
   {
    //count rows
    $count = mysqli_num_rows($res);//function to get all the rows in db
    $sn=1;
    if($count>0)
    {
        while($rows= mysqli_fetch_assoc($res))
        {
            //using while loop to get all data from db
            $id=$rows['id'];
            $full_name=$rows['full_name'];
            $username=$rows['user_name'];
  
            ?>
    <tr>
        <td><?php echo $id++;?>.</td>
        <td><?php echo $full_name;?></td>
        <td><?php echo $username;?></td>
        <td>
            <a href="#" class="btn-secondary">Update Admin</a>
            <a href="#" class="btn-danger">Delete Admin</a>
        </td>

        
    </tr>


                    <?php
                            }
                        }
                        else
                        {
                            //
                        }
                                
                    }

                    ?>


           
   
    
  </table>

   
</div>
</div>
<!-- Main Content Section ends!-->

<?php
include('partials/footer.php');
?>








