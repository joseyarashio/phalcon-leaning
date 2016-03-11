<?php
    use \Phalcon\Tag;
    /**
     *
     */
    class SigninController extends ControllerBase
    {
        public function indexAction()
        {
            Tag::setTitle('Sign in');
            Parent::initialize();
            $this->assets->collection('additional') ->addCss('css/signin.css');
        }
    }
