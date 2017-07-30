<?php

namespace yiichina\ckeditor;

use yii\Helpers\Html;

/**
 * This is just an example.
 */
class Simditor extends \yii\widgets\InputWidget
{
    public function init()
    {
        $view = $this->getView();
        CkeditorAsset::register($view);
		$view->registerJs('CKEDITOR.replace("editor")');
    }

    public function run()
    {
        return Html::activeTextarea($this->model, $this->attribute, ['rows' => $rows, 'data-provide' => 'markdown-editor']);
    }
}
