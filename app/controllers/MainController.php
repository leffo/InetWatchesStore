<?php


namespace app\controllers;


use ishop\App;

class MainController extends AppController
{
    public function indexAction()
    {
        //  Передача метаданных установкой.
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые_слова...');
        $name = 'Alex';
        $age  = 54;
        $status = 'root';
        $this->set(compact('name', 'age', 'status'));
    }
}