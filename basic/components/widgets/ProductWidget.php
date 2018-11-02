<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 14.10.2018
 * Time: 20:21
 */

namespace app\components\widgets;

use app\models\Product;
use yii\base\Widget;
use yii\helpers\VarDumper;

class ProductWidget extends Widget {

    public $tpl;
    public $data;
    public $product;
    public $offerHtml;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'owl_carusel_items';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        $this->data = Product::find()->indexBy('discount')->asArray()->where('discount')->all();
        $this->offerHtml = $this->getOfferHtml($this->data);
        return $this->offerHtml;
    }

    protected function getOfferHtml($data) {
        $data = array_values($data);
        $str = '';
        for($i = 0; $i < 9 && $i < count($data); $i++) {
            $str.= $this->offerToTemplate($data[$i]);
        }

        return $str;
    }
    protected function offerToTemplate($offer) {
        ob_start();
        include __DIR__ . '/special_offers_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}