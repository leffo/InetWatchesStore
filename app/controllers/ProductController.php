<?php


namespace app\controllers;


class ProductController extends AppController
{
    public function viewAction()
    {
        $alias =  $this->route['alias'];
        $product = \R::findOne('product',  "alias = ? AND STATUS = '1'", [$alias]);
        debug($product);
    }
}