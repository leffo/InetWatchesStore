<?php


namespace app\controllers;


use ishop\App;
use R;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = R::find('brand', 'LIMIT 3');
        debug($brands);

        //  Передача метаданных установкой.
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые_слова...');
        $this->set(compact('brands'));
    }
}