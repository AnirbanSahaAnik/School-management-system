<?php
include_once('db.php');
function insert($userinfo){
    $conn = getConnection();
    $sql = "insert into exam values('', '{$userinfo['name']}', '{$userinfo['pass']}', '{$userinfo['mail']}')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
        return false;
    }


}
function validateUser($id, $password){
    $conn = getConnection();
    $sql = "select * from admin where id = '$id' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(count($row) > 0){
        return true;
    }else{
        return false;
    }


}
function allUserList(){
    $conn = getConnection();
    $sql = "select * from admin";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function updateMyInfo($id,$userinfo){
    $conn = getConnection();
    $sql = "update admin set name='{$userinfo['name']}' , pass='{$userinfo['pass']}' , mail='{$userinfo['mail']}' where id='{$id}'";

    if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}

}
function deleteUserbyid($id){
    $conn = getConnection();
    $sql = "delete from admin where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/userlist.php?your info is deleted');
    }
    else
    {
        header('location: ../view/userlist.php?Not deleted your info');
    }

}
function getUserbyid($id){
    $conn = getConnection();
    $sql = "select * from admin where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}
function forgetpass(){

}


?>
