<?php


namespace app\controllers;


class ProductController extends AppController
{
    public function viewAction()
    {
        $alias =  $this->route['alias'];
        $product = \R::findOne('product',  "alias = ? AND status = '1'", [$alias]);
        if (!$product) {
            throw new \Exception('Страница не найдена', 404);
        }
        // TODO хлебные крошки

        // TODO связанные товары

        // TODO запись в куку запрошенного товара

        // TODO просмотренные товары

        // TODO галерея

        // TODO модификации товара

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product'));
    }
}