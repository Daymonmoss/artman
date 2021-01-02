<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\AccountForm;


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\AccountForm */

$this->title = 'My Account';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-account">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(['id' => 'form-account']); ?>
                <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?><br>
                <?= $form->field($model, 'surname')->textInput(['maxlength' => 255]) ?><br>
                <?= $form->field($model, 'email')?><br>
                Email: <?= Html::encode("{$model->email}") ?><br><br>
                <?= $form->field($model, 'online_status')->dropdownList([
                    AccountForm::OFFLINE => ('Offline'),
                    AccountForm::ONLINE => ('Online')
                ]) ?><br>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Save Changes', ['class' => 'btn btn-primary', 'name' => 'account-button']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <br><br>
    <div>
        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
    </div>

    <code><?= __FILE__ ?></code>
</div>