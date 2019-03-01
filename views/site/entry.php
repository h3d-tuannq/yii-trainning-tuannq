<?php
/**
 * Created by PhpStorm.
 * User: tuann
 * Date: 10/22/2018
 * Time: 18:45
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'name') ?>
    <?= $form->field($model,'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>

