<?php
namespace Modules\Blog\Controllers;
class BlogController
{
	public $restfull=true;
	public function test($id)
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
}
