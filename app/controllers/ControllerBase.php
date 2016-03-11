<?php
    use \Phalcon\Tag;
    class ControllerBase extends \Phalcon\Mvc\Controller
    {
        public function initialize()
        {
            Tag::prependTitle('Learning phalcon | ');

            $this->assets->collection('style')  ->addCss('css/bootstrap.min.css',flase,false)
                                                ->addCss('css/style.css')
                                                ->setTargetPath('css/production.css')
                                                ->setTargetUri('css/production.css')
                                                ->join(true)
                                                ->addFilter(new Phalcon\Assets\Filters\Cssmin());

            // make a collection to combine all js stuff together.
            $this->assets->collection('js')     ->addJs('js/jquery.min.js',flse,false)
                                                ->addJs('js/bootstrap.min.js',false,false)
                                                ->setTargetPath('js/production.js')
                                                ->setTargetUri('js/production.js')
                                                ->join(true)
                                                ->addFilter(new Phalcon\Assets\Filters\Jsmin());
        }

    }
