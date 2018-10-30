<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id product id
 * @property string $name product name
 * @property string $model Название модели продукта
 * @property int $category_id category id
 * @property string $description product description
 * @property string $image image url
 * @property string $price product price
 * @property int $brand_id Id производителя
 * @property int $discount Скидка на товар в процентах
 * @property string $date Дата добавления товара
 *
 * @property CommentToProduct[] $commentToProducts
 * @property OrderProduct[] $orderProducts
 * @property Category $category
 * @property Brand $brand
 * @property SpecialOffers[] $specialOffers
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'description', 'image', 'price', 'brand_id'], 'required'],
            [['category_id', 'brand_id', 'discount'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['date'], 'safe'],
            [['name', 'model'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 56],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'model' => 'Модель',
            'category_id' => 'Категория',
            'description' => 'Описание',
            'image' => 'Картинка',
            'price' => 'Цена',
            'brand_id' => 'Производитель',
            'discount' => 'Скидка',
            'date' => 'Дата',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentToProducts()
    {
        return $this->hasMany(CommentToProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialOffers()
    {
        return $this->hasMany(SpecialOffers::className(), ['product_id' => 'id']);
    }
}
