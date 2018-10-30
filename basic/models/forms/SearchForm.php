<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;


class SearchForm extends Model
{
    public $keyword;

    public function rules()
    {
        return [
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['keyword', 'string', 'min' => 3]
        ];
    }


}
