<?php
namespace Model;
use PotterORM\Base;

class Category extends Base
{
	static protected $table = 'categories';
	static protected $pk = 'id';
	static protected $fields = array('name');
}