<?php


namespace app\controllers;


use ishop\App;

class MainController extends AppController
{
    public function indexAction()
    {
        // Get all records from 'test' table 'ishop2' bd
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        //  Передача метаданных установкой.
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые_слова...');
        $name = 'Elena';
        $age  = 53;
        $status = 'wife';
        $this->set(compact('name', 'age', 'status', 'posts'));

    }
}