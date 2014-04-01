<?php
namespace Modules\User\Controllers;
use Modules\User\Models\User as User;
use Druto\DataBase\DataBase as DataBase;
class UserController
{

	function profile($username)
	{
		echo "User Profile Page $username";
	}
	
	function registerUser()
	{
// 		$username=$_POST['username'];
// 		$password=$_POST['password'];
// 		$u=new User();
		$db=DataBase::getInstance();
		
		p($db->fetchObjects("Select * from users WHERE id=2"));
		
		
		//print_r($u->select('*')->where('id','=',2)->andwhere('id','=',2)->first());
	}
}