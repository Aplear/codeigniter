<?php
/*
 * Класс для работы с данными таблицы pages
 * */
class Pages_model extends CI_Model {


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getPagesByWeight()
    {

        $query = $this->db->select('*')
            ->from('pages')
            ->group_by('weight')
            ->get();

        return $query->result_array();
    }

    public function getPage($field='id', $value=false)
    {
        if(!$value)
            return false;
        
        $query = $this->db->select('*')
            ->from('pages')
            ->where($field,$value)
            ->get();

        return $query->row_array();
    }


}
?>