<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
/* @var $authors yii\db\ActiveRecord[] */
/* @var $category yii\db\ActiveRecord[] */
/* @var $tags yii\db\ActiveRecord[] */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anons')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map($category, 'id', 'title')
    ) ?>

    <?= $form->field($model, 'author_id')->dropDownList(
        ArrayHelper::map($authors, 'id', 'nickname')
    ) ?>

    <?= $form->field($model, 'publish_status')->dropDownList([ 'draft' => 'Draft', 'publish' => 'Publish', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'publish_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
