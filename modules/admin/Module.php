<?php

namespace app\modules\admin;
use Yii;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'cars-table','fruits-table', 'users-table'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function($rule, $action){
                            $access = false;
                            $user = Yii::$app->user->identity;
                            $status = $user->getStatus();
                            if ($status->user_status_code === 'ADMIN') {
                                $access = true;
                            }
                            return $access;
                        }
                    ],
                    [
                        'actions' => ['index', 'cars-table','fruits-table'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
