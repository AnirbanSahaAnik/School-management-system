<?php
$title= "Request for Books";
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
            <fieldset>
                <legend>Request for Books </legend>
            <form class="" action="" method="post">
               <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="STUDENT ID" value="<?php echo $_COOKIE['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Book Name</td>
                    <td><input type="text" name="" value=""> </td>
                </tr>
    
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Request" value="Request"> 
                    </td>
                </tr>
    
               </table>
    
            </form>
            </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>