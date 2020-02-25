<?php

namespace app\modules\admin;

use Yii;
use yii\helpers\Url;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Yii::$app->language = Yii::$app->sourceLanguage;
        Yii::$app->homeUrl = Url::to(['/admin/default/index']);
        Yii::$app->view->title = Yii::$app->name . ' - Admin Panel';
        Yii::$app->layout = '@app/modules/admin/views/layouts/main';
    }
}
