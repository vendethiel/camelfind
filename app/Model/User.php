<?php
namespace Model;
use PotterORM\Base;

class User extends Base
{
	static protected $table = 'users';
	static protected $pk = 'id';
	static protected $fields = array('email', 'password', 'birthday', 'first_name', 'last_name');

    public function save()
    {
        if (!$this->exists())
            $this->values['password'] = encrypt($this->values['password']);

        parent::save();
    }
}