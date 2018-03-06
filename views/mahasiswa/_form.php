<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput() ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput() ?>

    <?= $form->field($model, 'no_hp')->textInput() ?>

    <?= $form->field($model, 'asal_sekolah')->textInput() ?>

    <?= $form->field($model, 'n_ayah')->textInput() ?>

    <?= $form->field($model, 'n_ibu')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput() ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'kewarganegaraan')->textInput() ?>

    <?= $form->field($model, 'agama')->textInput() ?>

    <?= $form->field($model, 'alamat_ortu')->textInput() ?>

    <?= $form->field($model, 'nohp_ortu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
