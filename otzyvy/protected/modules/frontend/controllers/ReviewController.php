<?php

class ReviewController extends Controller
{

    public $layout = 'main';

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionRead()
    {
        $model = Review::model()->find('slug=:slug', array(
            ':slug' => $_GET['slug']
        ));
        
        if ($model) {
            $this->render('read', array(
                'model' => $model
            ));
        } else {
            throw new CHttpException(404, 'Нет такого отзыва.');
        }
    }
}
