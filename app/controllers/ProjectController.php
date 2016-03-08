<?php
/**
* 
*/
class ProjectController extends \Phalcon\Mvc\Controller
{
	public function indexAction(){
		$this->view->setVars([
			'all'=>Project::find(
				'deleted is Null'
			),
		]);
	}
}