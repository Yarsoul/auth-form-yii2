<?php

namespace app\components;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\base\Widget;
use yii\grid\ActionColumn;



class UsersWidget extends Widget{
    
    public function init() {
        //
    }
    
    public function run(){
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\Users::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'user_id',
                'user_login',
                'user_status_id',
                [
                    
                    'class' => ActionColumn::class,
                    // you may configure additional properties here
                ],
            ],
            
        ]);
    }
    
}

?>