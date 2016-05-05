<?php
/*
 * Класс для работы с данными таблицы users
 * */
class Users_model extends CI_Model {


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getUserByEmail($email)
    {

        $query = $this->db->select('*')
                            ->from('users')
                            ->where('email',$email)
                            ->get();

        return $query->row_array();
    }

    public function getAllUsers()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    

}
?>