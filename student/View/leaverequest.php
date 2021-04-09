<?php
$title= "Dashboard";
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
            <fieldset>
                <legend>Request for leave </legend>
            <form class="" action="" method="post">
               <table>
                <tr>
                    <td>STUDENT ID</td>
                    <td><input type="text" name="STUDENT ID" value=""> </td>
                </tr>
                <tr>
                    <td>The reason for the holiday</td>
                    <td><input type="text" name="" value=""> </td>
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