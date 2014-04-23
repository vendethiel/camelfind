<?php
namespace Controller;
use Minima\Controller\Base;
use \Model;

class Misc extends Base
{
	public function homeAction()
	{
		return array(
			'articles' => Model\Article::findAll(),
		);
	}
}