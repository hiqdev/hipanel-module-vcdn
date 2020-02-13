<?php
/**
 * @var \hipanel\modules\vcdn\models\PullzoneSearch $model
 * @var \hipanel\modules\vcdn\grid\PullzoneGridView $gridView
 * @var \hipanel\modules\vcdn\grid\PullzoneRepresentations $representationCollection
 * @var \hipanel\models\IndexPageUiOptions $uiModel
 * @var \yii\data\ActiveDataProvider $dataProvider
 * @var \yii\web\View $this
 */

use hipanel\modules\vcdn\grid\PullzoneGridView;
use hipanel\widgets\IndexPage;
use hipanel\widgets\Pjax;
use yii\helpers\Html;

$this->title = Yii::t('hipanel.vcdn', 'Pull zone');
$this->params['subtitle'] = array_filter(Yii::$app->request->get($model->formName(), [])) ? Yii::t('hipanel', 'filtered list') : Yii::t('hipanel', 'full list');
$this->params['breadcrumbs'][] = $this->title;

$showFooter = ($uiModel->representation === 'profit-report') && (Yii::$app->user->can('order.read-profits'));

?>

<?php Pjax::begin(array_merge(Yii::$app->params['pjax'], ['enablePushState' => true])) ?>
    <?php $page = IndexPage::begin(compact('model', 'dataProvider')) ?>
        <?= $page->setSearchFormData(compact('uiModel')) ?>
        <?php $page->beginContent('main-actions') ?>
            <?= Html::a(Yii::t('hipanel.vcdn', 'Create pull zone'), ['@pullzone/create'], ['class' => 'btn btn-sm btn-success']) ?>
        <?php $page->endContent() ?>
        <?php $page->beginContent('sorter-actions') ?>
            <?= $page->renderSorter([
                'attributes' => [
                    'id'
                ],
            ]) ?>
        <?php $page->endContent() ?>
        <?php $page->beginContent('representation-actions') ?>
            <?= $page->renderRepresentations($representationCollection) ?>
        <?php $page->endContent() ?>
        <?php $page->beginContent('table') ?>
            <?php $page->beginBulkForm() ?>
            <?= PullzoneGridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $model,
                'boxed' => false,
                'showFooter' => $showFooter,
                'columns' => $representationCollection->getByName($uiModel->representation)->getColumns(),
            ]) ?>
            <?php $page->endBulkForm() ?>
        <?php $page->endContent() ?>
    <?php $page->end() ?>
<?php Pjax::end() ?>
