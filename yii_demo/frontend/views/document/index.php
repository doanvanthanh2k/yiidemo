<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Văn bản';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

    <div class="panel panel-primary">
        <div class="panel-heading" style="padding: 2px 15px;">
            <h2 style="text-align: center;"><b><?= Html::encode($this->title) ?></b></h2>
        </div>
        <div class="panel-body">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    [
                        'class' => 'yii\grid\SerialColumn',
                        'header' => 'STT',
                        'headerOptions' =>[
                            'style'=>'width:15px;text-align:center'
                        ],
                        'contentOptions' =>[
                            'style'=>'width:15px;text-align:center'
                        ]
                    ],

                    //'id',
                    [
                        'attribute'=>'document',
                        'format'=>'raw',
                        'value'=>function ($data)
                        {
                            //Lấy url để link đến văn bản
                           $url = Yii::getAlias('@web/uploads/'.$data->document);
                           if ($data->document) {
                            //Hàm tách 1 text thành 2 đoạn text và biến demo chỉ lấy phần đuôi trong tệp đc up
                               $demo = explode('.',$data->document)[1];
                           }
                           if (isset($demo)) {
                            if ($demo=='jpg' || $demo=='png') {
                                return Html::img($url,['width'=>'120','height'=>'100']);
                            }else{
                                return $data->document.Html::a(' <span class="glyphicon glyphicon-save"></span>',$url,['title'=>'Tải xuống']);
                            }
                           }else{
                              return Html::p('Không có tài liệu');
                           }
                        }
                    ],
                    'description',
                    'created_at:date',
                    'updated_at:date',
                ]
            ]);  ?>

            <p class="pull-right">
                <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
            </p>
        </div>
    </div>
</div>
