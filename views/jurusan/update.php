<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jurusan */

$this->title = 'Update Jurusan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Jurusans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jurusan, 'url' => ['view', 'id' => $model->id_jurusan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jurusan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
