<?php

class Ratings extends Items
{
    /**
     * DB table name
     * @var string
     */
    public $table = 'ratings';

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
        $sql = 'SELECT * FROM ' . $this->table;

        // join users
        $sql .= ' LEFT JOIN users ON users.user_id = ratings.user_id';

        // join lessons
        $sql .= ' LEFT JOIN lessons ON lessons.lesson_id = ratings.lesson_id';

        $sth = $this->_db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        // return as array of students and their ratings
        if (!empty($params['students_ratings'])) {
            if (!empty($result)) {
                $resultTmp = array();
                foreach ($result as $row) {
                    $resultTmp[$row['user_id']][] = $row;
                }
                $result = $resultTmp;
            }
        }

        return $result;
    }
}
































