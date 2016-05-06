<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
    public $data = array();
    public $obj;

    function __construct()
    {
        $this->obj =& get_instance();
    }
    
    function render($views = array(), $data=array())
    {

        /*start breadcrumbs*/
        //todo:: нужно организовать библиотеку крошек
        /*end breadcrumbs*/
        
        $this->obj->load->model('pages_model');
        $this->obj->load->model('articles_model');
        $data["header"]['pages'] = $this->obj->pages_model->getPagesByWeight();
        $data["header"]['articles'] = $this->obj->articles_model->getArticles();
        $this->obj->load->view('frontend/header',$data["header"]);
        
        foreach($views as $view) {
            $this->obj->load->view('frontend/'.$view, $data);
        }
        $this->obj->load->view('frontend/footer');
    }
    
    
}
?>