<?php

class Ratings extends Items
{
    /**
     * DB table name
     * @var string
     */
    public $_table = 'ratings';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get value from Storage
     * @param array $params
     * @return mixed
     */
    public function select(array $params = array())
    {
        // main query
        $sql = 'SELECT * FROM ' . $this->_table;

        // join users
        $sql .= ' LEFT JOIN users ON users.user_id = ratings.user_id';

        // join lessons
        $sql .= ' LEFT JOIN lessons ON lessons.lesson_id = ratings.lesson_id';

        $sth = $this->_db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}