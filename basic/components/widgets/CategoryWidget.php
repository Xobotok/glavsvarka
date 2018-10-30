<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 14.10.2018
 * Time: 20:21
 */

namespace app\components\widgets;

use Yii;
use yii\base\Widget;
use app\models\Category;
use yii\helpers\VarDumper;

class CategoryWidget extends Widget {

    public $tpl;
    public $data;
    public $tree;
    public $categoryHtml;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->categoryHtml = $this->getCategoryHtml($this->tree);
        return $this->categoryHtml;
    }

    protected function getTree() {
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node ['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }
    protected function getCategoryHtml($tree) {
        $str = '';
        foreach ($tree as $category) {
            $str.= $this->catToTemplate($category);
        }
        return $str;
    }
    protected function catToTemplate($category) {
        ob_start();
        include __DIR__ . '/category_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}