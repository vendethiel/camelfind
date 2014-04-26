<?php
namespace Model;
use PotterORM\Base;

class Comment extends Base
{
    static protected $table = 'comments';
    static protected $pk = 'id';
    static protected $fields = array('user_id', 'place_id',  'content');
} 