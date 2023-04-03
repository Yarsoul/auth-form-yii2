<?php

namespace app\modules\admin\controllers;
use yii\web\Controller;

class MainController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCarsTable()
    {
        return $this->render('cars-table');
    }

    public function actionFruitsTable()
    {
        return $this->render('fruits-table');
    }

    public function actionUsersTable()
    {
        return $this->render('users-table');
    }

}