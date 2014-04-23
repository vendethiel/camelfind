<?php
namespace Model;
use PotterORM\BaseModel as Base;

class User extends Base
{
	static protected $table = 'users';
	static protected $pk = 'id';
	static protected $fields = array('email', 'password');

    public function save()
    {
        if (!$this->exists())
            $this->values['password'] = encrypt($this->values['password']);

        parent::save();
    }
}