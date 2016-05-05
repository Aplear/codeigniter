<?php
/*
 * Класс для работы с данными таблицы pages
 * */
class Articles_model extends CI_Model {


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getArticles($field='id',$group='desc')
    {
        $query = $this->db->select('*')
            ->from('articles')
            ->group_by($field,$field)
            ->get();

        return $query->result_array();
    }

    public function getArticlesByPages($page=false)
    {
        if(!$page)
            return false;

        
        $query = $this->db->select('articles.*')
            ->from('articles')
            ->join('pages', 'pages.id = articles.page_id')
            ->where('pages.alias',$page)
            ->get();

        return $query->result_array();
    }


    public function getArticleByAlias($alias=false)
    {
        if(!$alias)
            return false;

        $query = $this->db->select('articles.*')
            ->from('articles')
            ->where('articles.alias',$alias)
            ->get();

        return $query->row_array();
    }
}
?>