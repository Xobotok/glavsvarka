<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 28.10.2018
 * Time: 14:47
 */

namespace app\controllers;


use yii\web\Controller;

class ParserController extends Controller {
public function actionParse() {
    return $this->render('parse');
}
}