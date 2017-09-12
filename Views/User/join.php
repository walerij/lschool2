<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-danger">
    <div class="panel panel-heading">
        <h1>JOIN US</h1>
    </div>
    <div class="panel-body">

      <?php $form=ActiveForm::begin(['id'=>'user-join-form']);?>
        <?=$form->field($userJoinForm, 'name'); ?>
        <?=$form->field($userJoinForm, 'email'); ?>
        <?=$form->field($userJoinForm, 'password')->passwordInput(); ?>
        <?=$form->field($userJoinForm, 'password2')->passwordInput(); ?>
     <?=Html::submitButton('Create',['class'=>'btn btn-danger'])?>


        <?php ActiveForm::end();?>
    </div>

</div>

