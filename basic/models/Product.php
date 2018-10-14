<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 14.10.2018
 * Time: 19:39
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord {

    public static function tableName() {
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}