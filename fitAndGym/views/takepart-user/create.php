<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Takepart */

$this->title = 'Zapisz się';
$this->params['breadcrumbs'][] = ['label' => 'Moje zajęcia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takepart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
