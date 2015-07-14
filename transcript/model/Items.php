<?php

class Items
{
    /**
     * DB Connection
     * @var PDO
     */
    protected $_db;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    /**
     * Save value to Storage
     * @return mixed
     */
    public function save()
    {

    }

    /**
     * Get value from Storage
     * @param array $params
     * @return mixed
     */
    public function select(array $params = array())
    {
        $sql = 'SELECT * FROM ' . $this->table;

        // get item by id
        if (!empty($params['id'] and !empty($this->itemType))) {
            $sql .= ' WHERE ' . $this->itemType . '_id = ' . (int) $params['id'];
        }

        $sth = $this->_db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Set value to Storage
     * @return mixed
     */
    public function insert()
    {

    }

    /**
     * Delete value from Storage
     * @return mixed
     */
    public function delete()
    {

    }
}