<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TakepartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zapisy na zajęcia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takepart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Zapisz na zajęcia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'activity_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
