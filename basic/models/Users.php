<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id ID пользователя
 * @property string $name Имя пользователя
 * @property string $login Логин пользователя
 * @property string $password_hash Hash пароля пользователя
 *
 * @property CommentToProduct[] $commentToProducts
 * @property Orders[] $orders
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'login', 'password_hash'], 'required'],
            [['name', 'login', 'password_hash'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'login' => 'Login',
            'password_hash' => 'Password Hash',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentToProducts()
    {
        return $this->hasMany(CommentToProduct::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['customer_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
