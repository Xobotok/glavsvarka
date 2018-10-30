<?php

namespace app\controllers;

class CategoryController extends \yii\web\Controller
{
    public function actionAll()
    {
        return $this->render('index');
    }

}
