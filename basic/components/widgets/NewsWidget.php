<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 31.10.2018
 * Time: 10:36
 */

namespace app\components\widgets;


require_once "../components/functions/trimText.php";

use app\models\News;
use app\models\Users;
use yii\base\Widget;
use yii\helpers\VarDumper;

class NewsWidget extends Widget {

    public $tpl;
    public $data;
    public $newsHtml;
    public $author;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'latest_news';
        }
        $this->tpl .= '.php';
    }

    public function run() {

        if($this->tpl = 'latest_news.php') {
            $this->data = News::find()
                ->orderBy('date_time')
                ->limit(3)
                ->asArray()
                ->joinWith(Users::tableName())
                ->all();
        }

        foreach ($this->data as $key => $value) {
            $text = $value['text'];
            $title = $value['title'];
            require_once "../components/functions/trimText.php";
            $text = trimText($text, 300);
            $title = trimText($title, 100);
            $this->data[$key]['text'] = $text;
            $this->data[$key]['title'] = $title;
        }

        $this->newsHtml = $this->getNewsHtml($this->data);
        return $this->newsHtml;
    }

    protected function getNewsHtml($data) {
        $str = '';
        foreach ($data as $news) {
            $str.= $this->catToTemplate($news);
        }
        return $str;
    }
    protected function catToTemplate($news) {
        ob_start();
        include __DIR__ . '/news_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}