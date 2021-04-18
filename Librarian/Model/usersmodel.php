<?php
require_once('db.php');

function insertUser($userinfo){
    $conn = getConnection();
    $sql = "insert into librarian values('','{$userinfo['librarianid']}','{$userinfo['name']}','{$userinfo['mail']}','{$userinfo['gender']}','{$userinfo['dob']}','{$userinfo['password']}','{$userinfo['mobileno']}','{$userinfo['address']}')";
    
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
 
}

function validateUser($librarianid,$password){
    $conn = getConnection();
    $sql = "select * from librarian where librarianid='$librarianid' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;

    }else{
        return false;

    }
}

function insertBook($bookinfo){
    $conn = getConnection();
    $sql = "insert into book_info values('','{$bookinfo['isbn']}','{$bookinfo['booktitle']}','{$bookinfo['author']}','{$bookinfo['edition']}','{$bookinfo['categories']}','{$bookinfo['uploadbookcopy']}','{$bookinfo['bookcopy']}')";
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
    
 }

 function viewBookInfo($serialno){
    $conn = getConnection();
    $sql = "select * from book_info where serialno='$serialno'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 } 

 function deleteBookInfo($serialno){
    $conn = getConnection();
    $sql = "delete from book_info where serialno='$serialno'";
    $result = mysqli_query($conn,$sql);
    if($result)
		{
            header('location: ../View/allBooksInfo.php?your info is deleted');
		}
		else
		{
            header('location: ../View/allBooksInfo.php?Not deleted your info');
		}

 } 

 function updateBookInfo($serialno, $UpdateBookinfo){
    $conn = getConnection();
    $sql = "update book_info set isbn='{$UpdateBookinfo['isbn']}' , booktitle='{$UpdateBookinfo['booktitle']}' , author='{$UpdateBookinfo['author']}' , edition='{$UpdateBookinfo['edition']}' , categories='{$UpdateBookinfo['categories']}' , bookfile='{$UpdateBookinfo['bookfile']}', bookcopy='{$UpdateBookinfo['bookcopy']}' where serialno='{$serialno}'";
    if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
    
} 


function createStudentsLibraryAcc($sturoll){
    $conn = getConnection();
    $existsRoll = getStudentByRoll($sturoll);
    $have = viewStudentLibProfile($sturoll);
    if($existsRoll != $have){
        $sql = "select * from student where roll='{$sturoll}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $newinfo = [
            'roll' => $row['roll'],
            'name' => $row['name'],
            'mail' => $row['email'],
            'gender' => $row['gender']
        ];
        $sql1 = "insert into studentslibraryaccount values('','{$newinfo['roll']}','{$newinfo['name']}','{$newinfo['mail']}','{$newinfo['gender']}')";
        if(mysqli_query($conn,$sql1)){
          header('location:../View/viewAllStudentsLibProfile.php');
        }else{
            echo "failed to Create your Student Library Account!";
         }
        }else{
        echo "Exist Account";
       }

}


function deletestudentlibprofile($roll){
    $conn = getConnection();
    $sql = "delete from studentslibraryaccount where roll='$roll'";
    $result = mysqli_query($conn,$sql);
    if($result)
		{
            header('location: ../View/viewAllStudentsLibProfile.php?your info is deleted');
		}
		else
		{
            header('location: ../View/allBooksInfo.php?Not deleted your info');
		}

 }

function ViewAllStudentsLibInfo()
	{
		$conn = getConnection();
		$sql = "select * from studentslibraryaccount";
		$result = mysqli_query($conn, $sql);
		$studentsLibInfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($studentsLibInfo, $row); 
		}

		return $studentsLibInfo;
	}

function viewStudentLibProfile($roll){
        $conn = getConnection();
        $sql = "select * from studentslibraryaccount where roll='$roll'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
      
    }  
    
function UpdateStudentLibProfile($roll, $UpdateStudentLibProfile){
        $conn = getConnection();
        $sql = "update studentslibraryaccount set mail='{$UpdateStudentLibProfile['mail']}', name='{$UpdateStudentLibProfile['name']}' where roll='{$roll}'";
        if(mysqli_query($conn, $sql))
            {
                return true;
            }
            else
            {
                return false;
            }
        
    }    
    

function insertNotice($noticeinfo){
    $conn = getConnection();
    $sql = "insert into notice values('','{$noticeinfo['noticetitle']}','{$noticeinfo['noticedetails']}','{$noticeinfo['noticetime']}')";
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
    
}

function issuedBookDetails($issuedbook){
    $conn = getConnection();
    $sql = "insert into issuedbookdetails values('','{$issuedbook['isbnno']}','{$issuedbook['studentroll']}','{$issuedbook['issuesdate']}','{$issuedbook['returndate']}','{$issuedbook['returnstatus']}','0')";
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
    
}

function viewIssuedBookDetails()
	{
		$conn = getConnection();
		$sql = "select * from issuedbookdetails";
		$result = mysqli_query($conn, $sql);
		$issuedbookinfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($issuedbookinfo, $row); 
		}

		return $issuedbookinfo;
	}

    function assignBookLateFine($studentroll, $addlatefine){
        $conn = getConnection();
        $sql = "update issuedbookdetails set returndate='{$addlatefine['returndate']}', returnstatus='{$addlatefine['returnstatus']}' , fine='{$addlatefine['addfine']}' where studentroll='$studentroll'";
        if(mysqli_query($conn, $sql))
            {
                return true;
            }
            else
            {
                return false;
            }
        
    } 
    
    function viewIssuedInfo($studentroll){
        $conn = getConnection();
        $sql = "select * from issuedbookdetails where studentroll='$studentroll'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
      
     }

     function ViewRequestBook()
     {
         $conn = getConnection();
         $sql = "select * from bookrequest";
         $result = mysqli_query($conn, $sql);
         $RequestBook =[];
 
         while($row = mysqli_fetch_assoc($result))
         {
             array_push($RequestBook, $row); 
         }
 
         return $RequestBook;
     }     



function getAllBooksInfo()
	{
		$conn = getConnection();
		$sql = "select * from book_info";
		$result = mysqli_query($conn, $sql);
		$booksinfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($booksinfo, $row); 
		}

		return $booksinfo;
	}



 function searchBookInfo($isbnno){
    $conn = getConnection();
    $sql = "select * from book_info where isbn='$isbnno'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 }

function viewAllNotice()
	{
		$conn = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($conn, $sql);
		$notices =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($notices, $row); 
		}

		return $notices;
	}

 function viewLibrarianProfile($librarianid){
    $conn = getConnection();
    $sql = "select * from librarian where librarianid='$librarianid'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 }

 function getUserById($Id){

    $conn = getConnection();
    $sql = "select * from librarian where librarianid='{$Id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

function getStudentByRoll($studentroll){
    $conn = getConnection();
    $sql = "select * from student where roll='{$studentroll}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}

function getISBN($isbnno){
    $conn = getConnection();
    $sql = "select * from book_info where isbn='{$isbnno}'";
    $result = mysqli_query($conn,$sql);
    //print_r($result);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}

 function updateLibrarianPassword($librarianid, $newpassword){
    $conn = getConnection();
    $sql = "update librarian set password='{$newpassword}' where librarianid='{$librarianid}'";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
} 

function getAllstudentsInfo(){
    $conn = getConnection();
    $sql = "select * from student";
    $result = mysqli_query($conn, $sql);
    $studentsinfo =[];
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($studentsinfo, $row);
    }
    return $studentsinfo;
}

function getAllTeachersList(){
    $conn = getConnection();
    $sql = "select * from teacher";
    $result = mysqli_query($conn, $sql);
    $teacherslist =[];
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($teacherslist, $row);
    }
    return $teacherslist;
}
 




?>