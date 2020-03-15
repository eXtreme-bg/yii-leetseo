<?php
/* @var $this LeetSeoOpenGraphTagsWidget */
/* @var $og LeetSeoOpenGraph */
?>

<meta property="og:title" content="<?= CHtml::encode($og->title) ?>" />
<meta property="og:type" content="<?= CHtml::encode($og->type) ?>" />
<meta property="og:url" content="<?= CHtml::encode($og->url) ?>" />
<meta property="og:image" content="<?= CHtml::encode($og->image) ?>" />

<?php if ($og->imageUrl) : ?>
    <meta property="og:image:url" content="<?= CHtml::encode($og->imageUrl) ?>" />
<?php endif; ?>

<?php if ($og->imageSecureUrl) : ?>
    <meta property="og:image:secure_url" content="<?= CHtml::encode($og->imageSecureUrl) ?>" />
<?php endif; ?>

<?php if ($og->imageType) : ?>
    <meta property="og:image:type" content="<?= CHtml::encode($og->imageType) ?>" />
<?php endif; ?>

<?php if ($og->imageWidth) : ?>
    <meta property="og:image:width" content="<?= CHtml::encode($og->imageWidth) ?>" />
<?php endif; ?>

<?php if ($og->imageHeight) : ?>
    <meta property="og:image:height" content="<?= CHtml::encode($og->imageHeight) ?>" />
<?php endif; ?>

<?php if ($og->imageAlt) : ?>
    <meta property="og:image:alt" content="<?= CHtml::encode($og->imageAlt) ?>" />
<?php endif; ?>

<?php if ($og->audio) : ?>
    <meta property="og:audio" content="<?= CHtml::encode($og->audio) ?>" />
<?php endif; ?>

<?php if ($og->audioUrl) : ?>
    <meta property="og:audio:url" content="<?= CHtml::encode($og->audioUrl) ?>" />
<?php endif; ?>

<?php if ($og->audioSecureUrl) : ?>
    <meta property="og:audio:secure_url" content="<?= CHtml::encode($og->audioSecureUrl) ?>" />
<?php endif; ?>

<?php if ($og->audioType) : ?>
    <meta property="og:audio:type" content="<?= CHtml::encode($og->audioType) ?>" />
<?php endif; ?>

<?php if ($og->description) : ?>
    <meta property="og:description" content="<?= CHtml::encode($og->description) ?>">
<?php endif; ?>

<?php if ($og->determiner) : ?>
    <meta property="og:determiner" content="<?= CHtml::encode($og->determiner) ?>" />
<?php endif; ?>

<?php if ($og->locale) : ?>
    <meta property="og:locale" content="<?= CHtml::encode($og->locale) ?>" />
<?php endif; ?>

<?php if ($og->localeAleternate) : ?>
    <meta property="og:localeAleternate" content="<?= CHtml::encode($og->localeAleternate) ?>" />
<?php endif; ?>

<?php if ($og->siteName) : ?>
    <meta property="og:site_name" content="<?= CHtml::encode($og->siteName) ?>">
<?php endif; ?>

<?php if ($og->video) : ?>
    <meta property="og:site_name" content="<?= CHtml::encode($og->video) ?>">
<?php endif; ?>

<?php if ($og->videoUrl) : ?>
    <meta property="og:video:url" content="<?= CHtml::encode($og->videoUrl) ?>" />
<?php endif; ?>

<?php if ($og->videoSecureUrl) : ?>
    <meta property="og:video:secure_url" content="<?= CHtml::encode($og->videoSecureUrl) ?>" />
<?php endif; ?>

<?php if ($og->videoType) : ?>
    <meta property="og:video:type" content="<?= CHtml::encode($og->videoType) ?>" />
<?php endif; ?>

<?php if ($og->videoWidth) : ?>
    <meta property="og:video:width" content="<?= CHtml::encode($og->videoWidth) ?>" />
<?php endif; ?>

<?php if ($og->videoHeight) : ?>
    <meta property="og:video:height" content="<?= CHtml::encode($og->videoHeight) ?>" />
<?php endif; ?>

<?php if ($og->videoAlt) : ?>
    <meta property="og:video:alt" content="<?= CHtml::encode($og->videoAlt) ?>" />
<?php endif; ?>
