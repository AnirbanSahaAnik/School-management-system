<?php
$title= "Book Information";
require_once('../Model/DatabaseConnection.php');
$bookList=getAllbook();
include('header.php');

?>

<?php include('sideBar.php'); ?> 

        <td>
            <center><h2>Book Information</h2></center>
            <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>ISBN</td>
                    <td>TITLE</td>
                    <td>AUTHOR</td>
                    <td>EDTION</td>
                </tr>";
                for($i = 0; $i<count($bookList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$bookList[$i]['isbn']}</td>
                    <td>{$bookList[$i]['title']}</td>
                    <td>{$bookList[$i]['author']}</td>
                    <td>{$bookList[$i]['edition']}</td>
                </tr>";
                }
                echo "</table>";
                ?>
       
      </tr>
      <?php include('footer.php'); ?>
      