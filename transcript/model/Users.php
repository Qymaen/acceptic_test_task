<?php

class Users extends Items
{
    /**
     * DB table name
     * @var string
     */
    public $table = 'users';

    /**
     * Item type
     * @var string
     */
    public $itemType = 'user';
    
    public function __construct()
    {
        parent::__construct();
    }
}