<?php
namespace Form;
use Minima\Form\Base;

class Article extends Base
{
	protected $fields = array('title', 'content');

	protected $validations = array(
		'mandatory' => array('title', 'content'),
	);
}