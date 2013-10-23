<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h3>Add your comment</h3>

<?php echo Form::open('comment/post/'); ?>
<?php echo Form::label("name", "Name"); ?>
<br />
<?php echo Form::input("name", $comment->name); ?>
<?php if (isset($errors)) { ?>
	<span class="error"><?php echo Arr::get($errors, 'name'); ?></span>
<?php } ?>
<br />
<br />
<?php echo Form::label("email", "Email"); ?>
<br />
<?php echo Form::input("email", $comment->email); ?>
<?php if (isset($errors)) { ?>
	<span class="error"><?php echo Arr::get($errors, 'email'); ?></span>
<?php } ?>
<br />
<br />
<?php echo Form::label("comment", "Comment"); ?>
<br />
<?php echo Form::textarea("comment", $comment->comment); ?>
<?php if (isset($errors)) { ?>
	<span class="error"><?php echo Arr::get($errors, 'comment'); ?></span>
<?php } ?>
<br />
<br />
<?php echo Form::hidden("article_id", $article->pk()); ?>
<?php echo Form::submit("submit", "Submit"); ?>
<?php echo Form::close(); ?>