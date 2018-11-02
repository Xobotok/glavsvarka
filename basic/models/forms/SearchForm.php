<?php

namespace app\models\forms;

use app\models\Product;
use Yii;
use yii\base\Model;


class SearchForm extends Product
{
    public $keyword;

    public function rules()
    {
        return [
            ['keyword', 'trim'],
            ['keyword', 'string', 'min' => 3]
        ];
    }


}
