<?php
require_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$bookinfo =  viewBookInfo($serialno);

?>
<table border="1">
        <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Categories</th>
            <th>Book Item No.</th>
            <th>Preview Book</th>
        </tr>
        <tr>
            <td><?php echo $bookinfo['isbn']; ?></td>
            <td><?php echo $bookinfo['booktitle']; ?></td>
            <td><?php echo $bookinfo['author']; ?></td>
            <td><?php echo $bookinfo['edition']; ?></td>
            <td><?php echo $bookinfo['categories']; ?></td>
            <td><?php echo $bookinfo['bookcopy']; ?></td>
            <td><a href="<?php echo $bookinfo['bookfile']; ?>">Read the Book</a></td>
        </tr>
        <tr><a href="dashboard.php">Go to Dashboard</a></tr>
</table>        