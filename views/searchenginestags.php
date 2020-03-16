<?php
/* @var $this LeetSeoSearchEnginesTagsWidget */
/* @var $se LeetSeoSearchEngines */
?>

<?php if ($se->description) : ?>
    <meta name="description" content="<?= CHtml::encode($se->description) ?>">
<?php endif; ?>

<?php if ($se->keywords) : ?>
    <meta name="keywords" content="<?= CHtml::encode($se->keywords) ?>">
<?php endif; ?>

<?php if ($se->robots) : ?>
    <meta name="robots" content="<?= CHtml::encode($se->robots) ?>">
<?php endif; ?>

<title><?= CHtml::encode($se->title) ?></title>

<link rel="home" href="<?= Yii::app()->homeUrl; ?>">

<?php if ($se->canonical) : ?>
    <link rel="canonical" href="<?= CHtml::encode($se->canonical) ?>" />
<?php endif; ?>
