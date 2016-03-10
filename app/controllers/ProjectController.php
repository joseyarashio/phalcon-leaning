<?php
/**
*
*/
class ProjectController extends ControllerBase
{
	public function indexAction(){
		$this->view->setVars([
			'all'=>Project::find(
				'deleted is Null'
			),
		]);
	}
}
