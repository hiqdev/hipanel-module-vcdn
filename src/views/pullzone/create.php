<?php
/**
 * @var View $this
 */

use yii\web\View;

$this->title = Yii::t('hipanel.vcdn', 'Create pull zone');
$this->params['breadcrumbs'][] = ['label' => Yii::t('hipanel.vcdn', 'Pull zone'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?= $this->render('_form', compact(['model', 'models'])) ?>
