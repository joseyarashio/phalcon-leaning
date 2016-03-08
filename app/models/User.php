<?php

use \Phalcon\Mvc\Model\Behavior\SoftDelete;
class User extends BaseModel
{
	
	public function initialize()//Initialize
	{
		// local field, regerence model, reference field
		$this->hasMany('id','Project','user_id');


		//$this->getSource('users');
		$this->addBehavior(new SoftDelete([
			'field'=>'deleted',
			'value'=>1,
		]));
	}
	/*
	public function getSource(){
		return 'users';
	}
	*/

}