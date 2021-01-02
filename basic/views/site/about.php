<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use app\models\AccountForm;
use app\models\UserForm;
use app\models\User;

$this->title = 'About All Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                Name: <?= Html::encode("{$user->username}") ?> | Surname: <?= Html::encode("{$user->surname}") ?> | Online Status: <?= Html::encode("{$user->online_status}") ?>
            </li>
            <br>
        <?php endforeach; ?>

    </ul>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>

    <code><?= __FILE__ ?></code>
</div>
