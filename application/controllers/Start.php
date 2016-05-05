<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$views = [
			'index',
		];
		$data = array();
		$this->layout->render($views, $data);
	}
	
	public function news()
	{
		$views = [
			'sidebar',
			'anons',
		];
		$data = array();

		$this->load->model('articles_model');
		$this->load->model('pages_model');
		$data['anons'] = $this->articles_model->getArticlesByPages($this->uri->segment(1));
		$data['module'] = $this->pages_model->getPage('alias',$this->uri->segment(1));
		$this->layout->render($views, $data);
	}
	
	public function services()
	{
		$views = [
			'sidebar',
			'anons',
		];
		$data = array();

		$this->load->model('articles_model');
		$this->load->model('pages_model');
		$data['anons'] = $this->articles_model->getArticlesByPages($this->uri->segment(1));
		$data['module'] = $this->pages_model->getPage('alias',$this->uri->segment(1));
		$this->layout->render($views, $data);
	}

	public function articles($alias=false)
	{
		if(!$alias)
			return false;

		/*start breadcrumbs*/

		/*end breadcrumbs*/




		$views = [
			'sidebar',
			'article',
		];
		$data = array();

		$this->load->model('articles_model');
		$this->load->model('pages_model');

		$data['article'] = $this->articles_model->getArticleByAlias($this->uri->segment(2));
		$data['module'] = $this->pages_model->getPage('alias',$this->uri->segment(1));
		$this->layout->render($views, $data);
	}
}
