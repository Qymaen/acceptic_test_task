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

    /**
     * Get Specialization
     * @param int $userId
     *
     * @return string $specialization
     */
    public function getSpecialization($userId)
    {
        $userId = (int) $userId;

        $sql = 'SELECT `user_specialization` FROM ' . $this->table
            . ' WHERE `user_id` = ' . $userId;

        $sth = $this->_db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result)) {
            return;
        }

        return $result[0]['user_specialization'];
    }
}