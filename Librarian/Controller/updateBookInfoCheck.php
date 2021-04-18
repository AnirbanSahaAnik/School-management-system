<?php
	session_start();
	require_once('../Model/usersmodel.php'); 
	if(isset($_POST['updatebookinfo']))
	{
		
	$serialno = $_SESSION['serialno'];
	
    $isbn = $_POST['isbn'];
    $booktitle = $_POST['booktitle'];
    $categories = $_POST['categories'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
	$bookcopy = $_POST['bookcopy'];
    $bookfile = $_POST['bookfile'];

		$UpdateBookinfo = array('isbn' => $isbn, 'booktitle' => $booktitle, 'categories' => $categories, 'author' => $author, 'edition' => $edition, 'bookcopy' => $bookcopy, 'bookfile' => $bookfile);
		$check = updateBookInfo($serialno, $UpdateBookinfo);
		if($check)
		{
			echo "Book info updated!";
			header('location: ../View/allBooksInfo.php');
		}
		else
		{
			echo "Can't update the book Information!";
		}
		
	}
?>