<?php
$title= "Request for leave";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?> 
        <td>
            <fieldset>
                <legend>Request for leave </legend>
            <form class="" action="../Controller/leaveCheck.php" method="post">
               <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value="<?php echo $viemyinfo['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $viemyinfo['name']; ?>"> </td>
                </tr>
                <tr>
                    <td>Leave From</td>
                    <td><input type="date" name="leave_from" value=""> </td>
                </tr>
                <tr>
                    <td>Leave To</td>
                    <td><input type="date" name="leave_to" value=""> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit"> 
                    </td>
                </tr>
    
               </table>
    
            </form>
            </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>