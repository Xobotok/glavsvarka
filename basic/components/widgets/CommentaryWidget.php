<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 21.10.2018
 * Time: 21:44
 */

namespace app\components\widgets;


use app\models\CommentProduct;
use app\models\Users;
use yii\base\Widget;

class CommentaryWidget extends Widget {

    public $tpl;
    public $data;
    public $commentHtml;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'owl_carusel_items';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl === 'owl_carusel_items.php') {
            $this->data = CommentProduct::find()->indexBy('id')->asArray()->joinWith(Users::tableName())->where(['status_id' => 5])->all();
            $this->commentHtml = $this->getCommentHtml($this->data);
        }
        return $this->commentHtml;
    }
    protected function commentToTemplate($commentary) {
        ob_start();
        include __DIR__ . '/commentary_tpl/' . $this->tpl;
        return ob_get_clean();
    }
    protected function getCommentHtml($data) {
        $data = array_values($data);
        $str = '';
        foreach ($data as $commentary) {
            $str.= $this->commentToTemplate($commentary);
        }
        return $str;
    }

}