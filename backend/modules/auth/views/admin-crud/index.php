<?php

use backend\modules\auth\models\AdminCrud\AdminCrudSearch;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel AdminCrudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admins-Crud';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn-sm btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'username',
            'role',
            'status',
            'created_at',
//            [
//                'attribute' => 'category_id',
//                'value' => function ($model) {
//                    return empty($model->category_id) ? '-' : $model->category->title;
//                },
//            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {images} {delete}',
                'buttons' => [
                    'images' => function ($url, $model, $key) {
                         return Html::a(
                             '<span class="glyphicon glyphicon glyphicon-picture" aria-hidden="true"></span>',
                             Url::to(['image/index', 'id' => $model->id])
                         );
                    }
                ],
            ],
        ],
    ]); ?>

</div>
