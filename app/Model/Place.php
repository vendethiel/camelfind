<?php
namespace Model;
use PotterORM\BaseModel;

class Place extends BaseModel
{
    static protected $table = 'places';
    static protected $pk = 'id';
    static protected $fields = array('name', 'file', 'k', 'a');
}