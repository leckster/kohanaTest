<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Comment extends Controller_Template
{

	public $template = 'base';

	public function action_post()
	{
		$comment = new Model_Comment();
		$comment->values($this->request->post());
		$comment_errors = array();

		try {
			$comment->save();
			$this->redirect("article/view/" . $comment->article_id);
		} catch (ORM_Validation_Exception $ex) {
			$comment_errors = $ex->errors('validation');
		}

		$article = ORM::factory('article', $comment->article_id);

		$view = new View('article/single');
		$view->set("article", $article);
		$view->set("old_comment", $comment);
		$view->set('errors', $comment_errors);

		$this->template->set('content', $view);
	}

}
