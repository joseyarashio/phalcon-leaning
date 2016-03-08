<?php

class LoginController extends \Phalcon\Mvc\Controller
{
	public function onConstruct(){echo 1;}

	public function initialize(){
		$this->view->setTemplateAfter('default');
	}

	public function indexAction(){
		echo "Login !!!";
	}
	public function processAction($username,$age){
		
		$this->view->setVar('user',$username);
		$this->view->setVar('age',$age);
		// test save
	}

}

