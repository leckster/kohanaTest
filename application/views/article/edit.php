<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Create new article</h1>

<?php echo Form::open('article/save/' . $article->id); ?>
<?php echo Form::label("title", "Title"); ?>
<br />
<?php echo Form::input("title", $article->title); ?>
<?php if (isset($errors)) { ?>
	<span class="error"><?php echo Arr::get($errors, 'title'); ?></span>
<?php } ?>
<br />
<br />
<?php echo Form::label("content", "Content"); ?>
<br />
<?php echo Form::textarea("content", $article->content); ?>
<?php if (isset($errors)) { ?>
	<span class="error"><?php echo Arr::get($errors, 'content'); ?></span>
<?php } ?>
<br />
<br />
<?php echo Form::submit("submit", "Submit"); ?>
<?php echo Form::close(); ?>

