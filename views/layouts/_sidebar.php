<?php if(!Yii::$app->user->isGuest): 
    $user = Yii::$app->user->identity;
    $userStatusCode = $user->getStatus()->user_status_code; 
    $userStatusTitle = $user->getStatus()->user_status_title; 
    echo 'Ваш статус: '.$userStatusTitle; ?>
    <br>
    <a href="<?=  yii\helpers\Url::to(['/admin/main/cars-table'])?>">Показать таблицу "Автомобили"</a>
    &nbsp;
    <a href="<?=  yii\helpers\Url::to(['/admin/main/fruits-table'])?>">Показать таблицу "Фрукты"</a>
    &nbsp;
    <?php if($userStatusCode === 'ADMIN'): ?>
        <a href="<?=  yii\helpers\Url::to(['/admin/main/users-table'])?>">Показать пользователей</a>
    <?php endif ?>
    <br>    
<?php endif ?>