<?php
$title= "Dashboard";
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
            <center><h2>Issue Books History</h2></center>
            <table border="1" width="100%">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Borrowed On</th>
                    <th>Return On</th>
                    <th>Fine</th>
                  <tr>  
                </thead>
                <tbody>
                  <tr>
                    <td>A Prayer for Owen Meany</td>
                    <td align="center">John Irving</td>
                    <td align="center">11-02-21</td>
                    <td align="center">15-02-21</td>
                    <td align="center">00</td>
                    
                  </tr>
                  <tr>
                      <td>A Tree Grows in Brooklyn</td>
                      <td align="center">Betty Smith</td>
                      <td align="center">16-02-21</td>
                      <td align="center">18-02-21</td>
                      <td align="center">00</td>
                  </tr>

                  
                </tbody>
              </table>
        </td>
      </tr>

      <?php include('footer.php'); ?>