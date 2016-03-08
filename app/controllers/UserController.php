<?php

class UserController extends \Phalcon\Mvc\Controller
{
	public function indexAction()//default Action
	{
		$this->view->setVars([
			'single'=> User::findFirstById(1),
			'all'=>User::find([
			'deleted is Null'
			]),
		]);
	}
	public function createAction()//create user and insert into model
	{

		$user = new User();
		$user->email="test@test.com";
		$user->password="test";
		$result=$user->create();
			
		if(!$result)
		{
			print_r($user->getMessages());
		}
		else
		{
			echo "Create user success!";
		}
			
	}
		
	public function updateAction($id)//update user info
	{
		$user = User::findFirstById($id);
		if(!$user)
		{
			echo"We have no this user !<br>";
			die;

		}
		$result=$user->update();
			
		if(!$result)
		{
			print_r($user->getMessages());
		}
		else
		{
			echo "user(id:".$id.") updated success!<br>";
		}
	}
	public function deleteAction($id)//delete user data from model
	{
		$user = User::findFirstById($id);
		if(!$user)
		{
			echo"You can't delete this user ! We didn't find it.<br>";
			die;

		}
		$result=$user->delete();
		if(!$result)
		{
			print_r($user->getMessages());
		}
		else
		{
			$this->updateAction($id);//when delete, update datetime also update.
			echo "user(id:".$id.") deleted success!<br>";
		}
	}
}
