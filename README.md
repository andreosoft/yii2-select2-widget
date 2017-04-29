# yii2-select2-widget
using

Select2::widget(['model' => $searchModel, 'attribute' => 'category', 'items' => ArrayHelper::map(CatalogCategorys::find()->All(), 'id', 'fullname'), 'options' => ['class' => 'form-control', 'prompt' => Yii::t('catalog/main', 'All')]]
