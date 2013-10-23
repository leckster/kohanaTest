<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM
{

	protected $_belongs_to = array(
		'article' => array(
			'model' => 'article',
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
			'name' => array(
				array('not_empty')
			),
			'comment' => array(
				array('not_empty'),
				array(
					'min_length',
					array(':value', 10)
				)
			),
			'email' => array(
				array('not_empty'),
				array('email')
			)
		);
	}

}
?>

