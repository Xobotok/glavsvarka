<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CommentProduct]].
 *
 * @see CommentProduct
 */
class CommentProductQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CommentProduct[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CommentProduct|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
