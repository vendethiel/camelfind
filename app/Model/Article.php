<?php
namespace Model;
use PotterORM\Base;

class Article extends Base
{
	static protected $table = 'articles';
	static protected $pk = 'id';
	static protected $fields = array('title', 'content', 'created_at');

	public function getDate()
	{
		list($date) = explode(' ', $this['created_at']);
		return $date;
	}
}