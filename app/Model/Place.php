<?php
namespace Model;
use PotterORM\Base;

class Place extends Base
{
    static protected $table = 'places';
    static protected $pk = 'id';
    static protected $fields = array('name', 'file', 'k', 'a');
}