<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1 style="text-align: center;margin-bottom: 3%;"><b>Thông tin người dùng</b></h1>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="../uploads/<?= Yii:: $app->user->identity->avatar; ?>" style="width: 100%;border-radius: 15px;" alt="">
        </div>

        <div class="col-md-7">
             <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'email',
                    'first_name',
                    'last_name',
                    'phone',
                    [
                        'attribute' => 'birthday',
                        'value' => isset($model->birthday) ? Yii::$app->formatter->asDate($model->birthday, 'dd-MM-yyyy') : null,
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>


<p style="margin-left: 85%;">
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
</p>

</div>
