<?php


namespace app\controllers;


use ishop\App;
use ishop\Cache;

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
        $status = ['wife', 'lovers', 'beautiful', 'superior'];
        $cache = Cache::instance();
        //$cache->set('test', $status);
        //$cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $status);
        }
        debug($data);
        $this->set(compact('name', 'age', 'status', 'posts'));

    }
}