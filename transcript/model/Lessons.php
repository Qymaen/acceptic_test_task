<?php

class Lessons extends Items
{
    /**
     * DB table name
     * @var string
     */
    public $table = 'lessons';

    /**
     * Item type
     * @var string
     */
    public $itemType = 'lesson';

    public function __construct()
    {
        parent::__construct();
    }
}