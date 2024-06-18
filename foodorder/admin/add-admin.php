<?php
include('partials/menu.php'); 
?>


<div class="main-content"></div>
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br><br>

        <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>

        <form action="" method="POST">
    <table class="tbl-30">
        <tr>
            <td>Full Name:</td>
            <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
        </tr>

        <tr>
            <td>User Name:</td>
            <td><input type="text" name="user_name" placeholder="Userame"></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Your Password"></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
            </td>
        </tr>
    </table>


        </form>
    </div>

<?php
include('partials/footer.php');
?>

<?php
// value from form save it in database

if(isset($_POST['submit']))
{
    //click
    //echo"Button Clicked"

    //get data from form
    $full_name = $_POST['full_name'];
    $user_name = $_POST['user_name'];
    $password =md5($_POST['password']);//md5 is password encryption code


    //sql query to save data into database
    $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            user_name='$user_name',
            password='$password'
    ";
    

    // executing query and save data to database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //check whether the (query is executed ) data is inserted or not and display appropriate message
    if($res==TRUE)
    {
        //data inserted
        //create a session variables to show Message
        $_SESSION['add'] = "Admin Added Successfully";
        //Redirect page
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //create a session variables to show Message
        $_SESSION['add'] = "failed to Add admin";
        //Redirect page
        header("location:".SITEURL.'admin/add-admin.php');
    }
}

?>