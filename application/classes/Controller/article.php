<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Article extends Controller
{

	const INDEX_PAGE = 'index.php/article';
	const EDIT_VIEW = 'article/edit';

	public function action_index()
	{
		$articles = ORM::factory('article')->find_all(); //loads all article objects

		$view = new View('article/index');
		$view->set("articles", $articles); //send articles objects to the view

		$this->response->body($view);
	}

	//loads the new article form
	public function action_new()
	{
		$article = new Model_Article();

		$view = new View(self::EDIT_VIEW);
		$view->set("article", $article); //pass a variable from the controller to the veiw

		$this->response->body($view);
	}

	//save the article
	public function action_save()
	{
		$article_id = $this->request->param('id'); //get the id from the request parameter
		$article = new Model_Article($article_id); //get the article model from the DB with the id
		$article->values($_POST); //populate $article object from $_POST
		$article->save(); //save article to DB

		$this->redirect('article/index'); //redirects to the article page after save
	}

	// edit the article
	public function action_edit()
	{
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);

		$view = new View('article/edit');
		$view->set("article", $article);

		$this->response->body($view);
	}

	// delete the article
	public function action_delete()
	{
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);

		$article->delete();
		$this->redirect('article/index');
	}

}
?>

