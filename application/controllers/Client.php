<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    public function index()
	{
        // $data['content'] = 'Client';
		// $this->load->view('page/accueil', $data);
		$this->load->model('Objet');
		$data['page'] = 'home';
		$data['objets'] = $this->Objet->getObjets(intval($this->session->userdata('idUser')));
		$data['contents'] = 'page/home';
		$this->load->view('page/accueil', $data);
	}

	public function details($id = 0)
	{
		$this->load->model('Objet');
		$data['page'] = 'product';
		$data['objet'] = $this->Objet->findObjet(intval($this->input->get("idObj")));
		$data['images'] = $this->Objet->getImages(intval($this->input->get("idObj")));
		$data['mesObjets'] = $this->Objet->getMesObjets(intval($this->session->userdata('idUser')));
		$data['contents'] = 'page/singleObjet';
		// var_dump($data['images']);
		// var_dump($data['objet']);
		$this->load->view('page/accueil', $data);
	}

	public function profil()
	{
        // $data['content'] = 'Client';
		// $this->load->view('page/accueil', $data);
		$this->load->model('Objet');
		$data['page'] = 'profil';
		$data['objets'] = $this->Objet->getMesObjets(intval($this->session->userdata('idUser')));
		$data['contents'] = 'page/home';
		$this->load->view('page/accueil', $data);
	}

	public function proposer()
	{
		$user1 = intval($this->input->get("user1"));
		$user2 = intval($this->input->get("user2"));
		$obj1 = intval($this->input->get("objet1"));
		$obj2 = intval($this->input->get("objet2"));
		$this->load->model('Model');
		$this->Model->proposer($user1,$obj1,$user2,$obj2);
		redirect('client/index');
	}

	public function notification()
	{
		$user1 = intval($this->session->userdata('idUser'));
		$this->load->model('Model');
		$this->load->model('Objet');
		$data['page'] = 'notif';
		$propos = $this->Model->getPropos(intval($this->session->userdata('idUser')));
		foreach($propos as $prop){
			$data['objet1'][] = $this->Objet->findObjet($prop['idObjet1']);
			$data['objet2'][] = $this->Objet->findObjet($prop['idObjet2']);
			$data['date'][] =  $prop['dateProp'];
			$data['idProp'][] = $prop['idProp'];
		}
		$data['contents'] = 'page/notif';
		// var_dump($data['objet2']);
		//var_dump($data['idProp']);
		$this->load->view('page/accueil', $data);
	}

	public function action()
	{
		$idProp = intval($this->input->get("idProp"));
		$user1 = intval($this->input->get("user1"));
		$user2 = intval($this->input->get("user2"));
		$obj1 = intval($this->input->get("objet1"));
		$obj2 = intval($this->input->get("objet2"));
		$type = intval($this->input->get("type"));
		$this->load->model('Model');
		$this->Model->actionProp($idProp,$user1,$obj1,$user2,$obj2,$type);
		redirect('client/index');
	}
}