<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Typeactivity */

$this->title = 'Create Typeactivity';
$this->params['breadcrumbs'][] = ['label' => 'Typeactivities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeactivity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
