<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment_status".
 *
 * @property int $id
 * @property string $name
 *
 * @property CommentProduct[] $commentToProducts
 */
class CommentStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 32],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentProducts()
    {
        return $this->hasMany(CommentProduct::className(), ['status_id' => 'id']);
    }
}
