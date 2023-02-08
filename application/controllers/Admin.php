<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
        // $data['content'] = 'Client';
		// $this->load->view('page/accueil', $data);
		$this->load->model('Root');
		$data['page'] = 'home';
		$data['objets'] = $this->Root->getObjets(intval($this->session->userdata('idUser')));
		$data['contents'] = 'page/home';
		$this->load->view('page/accueil', $data);
	}

	public function details()
	{
		$this->load->model('Root');
		$data['page'] = 'detail';
		$data['historique'] = $this->Root->getHistorique();
		$data['nbTransac'] = count($data['historique']);
		$data['nbUser'] = $this->Root->countUser();
		// var_dump($data['historique']);
		// var_dump($data['nbTransac']);
		// var_dump($data['nbUser']);
		$data['contents'] = 'page/detailAdmin';
		$this->load->view('page/accueil', $data);
	}
}