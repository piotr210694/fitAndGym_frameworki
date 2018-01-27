<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Calendar */

$this->title = 'Dodaj zajęcia do kalendarza';
$this->params['breadcrumbs'][] = ['label' => 'Kalendarz zajęć', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
