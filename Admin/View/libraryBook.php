<?php
	$title= "Library Book";
	include('header.php');
	include_once('../model/bookModel.php');
	$UsersList = allUserList();
?>
                <ul>
                  <li><a href="libraryBook.php">Library Book list</a></li>
                </ul>
              </td>
              <td>
                <center><h2>Library Book list</h2></center>

								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
										<td>ISBN</td>
										<td>Title</td>
										<td>Author</td>
										<td>Edition</td>
								</tr>";
								for($i = 0; $i<count($UsersList); $i++){
										echo "<tr align = 'center'>
										<td>{$UsersList[$i]['isbn']}</td>
										<td>{$UsersList[$i]['title']}</td>
										<td>{$UsersList[$i]['author']}</td>
										<td>{$UsersList[$i]['edition']}</td>
								</tr>";
								}
								echo "</table>";
								?>

							</td>
            </tr>
          </table>
        </td>
      </tr>

<?php include('footer.php'); ?>
