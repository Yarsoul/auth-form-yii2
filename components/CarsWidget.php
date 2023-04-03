<?php

namespace app\components;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\base\Widget;


class CarsWidget extends Widget{
    
    public function init() {
        //
    }
    
    public function run(){
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\Cars::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
        ]);
    }
    
}

?>