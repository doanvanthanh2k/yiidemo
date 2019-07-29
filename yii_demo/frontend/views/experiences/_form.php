<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use những cái để tạo select
use yii\helpers\ArrayHelper;
use frontend\models\User;
//use tạo datepicker
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Experiences */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experiences-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'started_date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Nhập ngày bắt đâu ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy/mm/dd'
        ]
    ]);?>


    <?= $form->field($model, 'finished_date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Nhập ngày kết thúc ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy/mm/dd'
        ]
    ]);?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
