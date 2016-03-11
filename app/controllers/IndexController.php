<?php
    use \Phalcon\Tag;
    class IndexController extends ControllerBase
    {

        public function indexAction()
        {
        	// echo "Hello World !!!";
            Tag::setTitle('Home');
            Parent::initialize();
        }
        public function startSessionAction()
        {
            $this->session->set('user',[
                'name'=>'Johnny',
                'age'=>27,
                'soOn'=>'soFar',
            ]);
            $this->session->set('name','Johnny');
        }
        public function getSessionAction()
        {
            $user=$this->session->get('user');
            print_r($user);
            echo $this->session->get('name');
        }
        public function removeSessionAction()
        {
            echo $this->session->remove('name');
        }
        public function destroySessionAction()
        {
            echo $this->session->destroy();
        }
    }
