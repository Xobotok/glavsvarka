<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 14.10.2018
 * Time: 20:21
 */

namespace app\components;

use yii\base\Widget;
use app\models\Category;

class CategoryWidget extends Widget {

    public $type;
    public $data;
    public $tree;
    public $categoryHtml;

    public function init() {
        parent::init();
        if ($this->type === null) {
            $this->type = 'menu';
        }
        $this->type .= '.php';
    }

    public function run() {
        $this->data = Category::find()->indexBy('id')->asArray()->all();
        debug($this->data);
        return $this->type;
    }

}