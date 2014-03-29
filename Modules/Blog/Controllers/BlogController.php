<?php
namespace Modules\Blog\Controllers;
use Modules\User\Models\Alam as Alam;
use Druto\Controllers\Controller as Controller;
use Druto\Configs\Config as Config;
use Druto\DataBase\DataBase as DataBase;
class BlogController extends Controller
{
	public $restfull=true;
	public function tcest($id)
	{
		echo "Display Product #$id <hr>";
	}

	public function getTest()
	{
		echo "Get Test";
	}

	public function postTest()
	{
		echo "Post Test";
	}

	public function putTest()
	{
		echo "Put Test";
	}

	public function deleteTest()
	{
		echo "Delete Test";
	}
	public function getMintu()
	{
		echo "I am Mintu";
	}
	public function getDisplayUserProfile($username)
	{
		$alam=new Alam;
		echo "User Profile Page of ".$username;
	}

	public function gettestCity($country,$state,$city)
	{
		echo " Country is $country || state is $state || city is $city";
	}

	public function getproductDetails($pdtid)
	{
		$post=new \Modules\Blog\Models\Post();
		//$post->id=26;
		//$post->title="asdasdasd";
		$post->save();
		//$post->delete(array(7,8,9));
		// $post->id=26;
		// $post->title="This is Koushik Post Modified";
		// $post->save();
		// echo $post;
		
		//print_r($post->select('*')->where('id','>',5)->andWhere('id','<',8)->first());
		// $post->title="First Post";
		// $post->save();
		// echo $post->id;
		$db=DataBase::getInstance();
		$db->setQuery("Select a from test")->query();

		//$db2=DataBase::getInstance();
		//$db2->setQuery("INSERT INTO `users`(`username`,`password`) VALUES('bisu','33333')")->query();

		//print_r($db2->getQueries());
		// //echo baseURL;
		// echo Config::get('database.default','test');
		// echo '<hr>';
		// Config::set('database.default','bisu');
		// Config::set('database.mysql.passwordp','rootwdp');
		// echo '<hr>';
		// echo Config::get('database.default','test');
		// echo '<hr>';
		echo "You want to see the details od $pdtid";

	}
}

