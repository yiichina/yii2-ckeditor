<?php

namespace yiichina\ckeditor;

use yii\Helpers\Html;

/**
 * This is just an example.
 */
class CKEditor extends \yii\widgets\InputWidget
{
    public function init()
    {
        $view = $this->getView();
        CKEditorAsset::register($view);
		$view->registerJs('CKEDITOR.replace("editor")');
    }

    public function run()
    {
        return Html::activeTextarea($this->model, $this->attribute);
    }
}
