<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment_to_product".
 *
 * @property int $id
 * @property string $text Текст комментария
 * @property int $user_id ID комментатора
 * @property int $product_id ID товара, к котором написан коментарий
 * @property int $status_id ID статуса комментария
 * @property string $extra Дополнительная информация. 
 *
 * @property Product $product
 * @property CommentStatus $status
 * @property Users $user
 */
class CommentProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment_to_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'user_id', 'product_id'], 'required'],
            [['text', 'extra'], 'string'],
            [['user_id', 'product_id', 'status_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => CommentStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'status_id' => 'Status ID',
            'extra' => 'Extra',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(CommentStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return CommentProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentProductQuery(get_called_class());
    }
}
