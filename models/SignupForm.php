<?php

namespace app\models;
use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    
    public $user_login;
    public $user_password;
    
    public function rules() {
        return [
            [['user_login', 'user_password'], 'required', 'message' => 'Заполните поле'],
            ['user_login', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
        ];
    }
    
    public function attributeLabels() {
        return [
            'user_login' => 'Логин',
            'user_password' => 'Пароль',
        ];
    }
    
}
