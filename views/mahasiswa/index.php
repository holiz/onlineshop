<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'tempat_lahir',
            'tgl_lahir',
            'alamat',
            //'no_hp',
            //'asal_sekolah',
            //'n_ayah',
            //'n_ibu',
            //'foto',
            //'nim',
            //'kewarganegaraan',
            //'agama',
            //'alamat_ortu',
            //'nohp_ortu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
