<?php

/**
 * @var \yii\web\View $this
 * @var Pullzone $model
 */

use hipanel\modules\vcdn\models\Pullzone;
use hipanel\widgets\Box;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php $form = ActiveForm::begin([
    'id' => 'order-form',
    'enableClientValidation' => true,
    'validateOnBlur' => true,
    'enableAjaxValidation' => true,
    'validationUrl' => Url::toRoute(['validate-form', 'scenario' => $model->scenario]),
]) ?>

<div class="row">
    <div class="col-md-6">

        <?php Box::begin() ?>

        <?php if (!$model->isNewRecord) : ?>
            <?= Html::activeHiddenInput($model, 'id') ?>
        <?php endif; ?>

        <?= $form->field($model, 'name')->textarea(['rows' => 3]) ?>

        <?php Box::end() ?>

    </div>
</div>

<div class='row'>
    <div class='col-md-12 no'>
        <?= Html::submitButton(Yii::t('hipanel', 'Save'), ['class' => 'btn btn-success']) ?>
        &nbsp;
        <?= Html::a(Yii::t('hipanel', 'Cancel'), ['@order/index'], ['class' => 'btn btn-default']) ?>
    </div>
</div>

<?php ActiveForm::end() ?>
