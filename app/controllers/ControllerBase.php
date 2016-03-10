<?php
    class ControllerBase extends \Phalcon\Mvc\Controller
    {
        public function initialize()
        {
            echo "extends ControllerBase!";
            $this->view->setTemplateBefore('common');//set common view

            $this->assets->addCss('css/style.css');
            $this->assets->addJs('js/jquery.min.js');
            $this->assets->addJs('//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js',true);
        }

    }
