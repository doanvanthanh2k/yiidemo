<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Experiences */

$this->title = 'Tạo kinh nghiệm';
$this->params['breadcrumbs'][] = ['label' => 'Kinh nghiệm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiences-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
