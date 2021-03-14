<?php $title= "Dashboard";
	include('header.php');
   ?> 

    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="../Controller/logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
 
      <tr id="navigation">
        <td width="350px">
          <h2 align="center">Login As </h2></br>
          <hr>
          <ul>
            <li><a href="studentLibraryAcc.php">Create Library Account(Student)</a></li>
            <li><a href="teacherLibraryAcc.php">Create Library Account(Teachers)</a></li>
            <li><a href="addnewbook.php">Add New Book</a></li>  
            <li><a href="routine.html">Delete Book</a></li>
            <li><a href="viewprofile.html">Update Book</a></li>
            <li><a href="teachernotice.html">View Students List</a></li>
            <li><a href="schoolnotice.html">View Teachers List</a></li>
            <li><a href="leaverequest.html">Block Library Account</a></li>
            <li><a href="">Delete Library Account</a></li>
            <li><a href="">New Book Arrival Notice</a></li>
            <li><a href="requestforbook.html">Book Borrow History</a></li>
            <li><a href="">Issue Book History</a></li>
            <li><a href="">Search Book Information</a></li>
            <li><a href="">Issue Book History</a></li>
          </ul>
        </td>
        <td id="main content">
          <h1>Welcome to Library</h1>
          <p>A library is fundamentally an organized set of resources, which include human services as well as the entire spectrum of media (e.g., text, video, hypermedia). Libraries have physical components such as space, equipment, and storage media; intellectual components such as collection policies that determine what materials will be included and organizational schemes that determine how the collection is accessed; and people who manage the physical and intellectual components and interact with users to solve information problems. </p>
        </td>
      </tr>

<?php include('footer.php'); ?>   