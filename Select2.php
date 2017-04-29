<?php

namespace andreosoft\select2;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use yii\helpers\Url;

class Select2 extends InputWidget {

    public $items = [];
    public $widgetOptions = [];
    public $contentsCss = [];

    public function init() {
        parent::init();

        $id = Json::encode('#' . $this->options['id']);
        $view = $this->getView();
        $widgetOptions = empty($this->widgetOptions) ? '' : (Json::encode($this->widgetOptions));
        $js = "$($id).select2($widgetOptions);";
        $view->registerJS($js);
        Asset::register($view);
    }

    public function run() {
        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
    }

}
