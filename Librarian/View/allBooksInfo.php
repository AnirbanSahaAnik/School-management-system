<?php 
include_once('../Model/usersmodel.php');
$booksinfo = getAllBooksInfo();
?>
<script type="text/javascript" src="../js/booksearch.js"></script>
<input type="text" name="booktitle" id="booktitle" onkeyup="ajax()" />
	<input type="button" name="" value="Search">
    <br>
    <div id="myh1" class="">
<table border="1">
        <tr>
            <th>Serial No.</th>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Categories</th>
            <th>Book Item No.</th>
            <th>Action</th>
        </tr>
        <?php  for($i=0; $i < count($booksinfo); $i++){ ?>
         <tr>
             <td><?php echo $booksinfo[$i]['serialno'] ?></td>
             <td><?php echo $booksinfo[$i]['isbn'] ?></td>
             <td><?php echo $booksinfo[$i]['booktitle'] ?></td>
             <td><?php echo $booksinfo[$i]['author'] ?></td>
             <td><?php echo $booksinfo[$i]['edition'] ?></td>
             <td><?php echo $booksinfo[$i]['categories'] ?></td>
             <td><?php echo $booksinfo[$i]['bookcopy'] ?></td>
             <td>
                  <a href="viewBookInfo.php?serialno=<?php echo $booksinfo[$i]['serialno']; ?>">VIEW</a> |
                  <a href="editBookInfo.php?serialno=<?php echo $booksinfo[$i]['serialno']; ?>">UPDATE</a> |
                  <a href="deleteBookInfo.php?serialno=<?php echo $booksinfo[$i]['serialno']; ?>">DELETE</a>
             </td>
         </tr><?php  } ?></div>
         <tr><td colspan="7"><a href="dashboard.php">Back To Dashboard</a></td></tr>
        
      
    </table>
