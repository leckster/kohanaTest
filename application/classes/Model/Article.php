<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Article extends ORM
{

	//contains many relations
	protected $_has_many = array(
		'comments' => array(
			'model' => 'comment',
			'foreign_key' => 'article_id'
		)
	);

	/**
	 * Model Validation
	 * 
	 * @return array
	 */
	public function rules()
	{
		return array(
			'title' => array(
				array('not_empty')
			),
			'content' => array(
				array('not_empty'),
				array(
					'min_length',
					array(':value', 10)
				)
			)
		);
	}

}
?>

