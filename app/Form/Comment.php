<?php
namespace Form;
use Minima\Form\Base;

class Comment extends Base
{
    protected $fields = array('content');

    protected $validations = array(
        'mandatory' => array('content'),
    );
}