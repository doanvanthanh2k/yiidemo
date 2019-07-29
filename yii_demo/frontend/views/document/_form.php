<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use những cái để tạo select
use yii\helpers\ArrayHelper;
use frontend\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Document */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="document-form">
    <!-- Lấy id từ bảng document -->
<!--     <?php $id = Yii::$app->user->getId() ?> -->

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
