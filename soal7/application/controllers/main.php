<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
    function __construct()
  {
    # code...
    parent::__construct();
		//if (!$this->session->userdata('id'))
		//{
		//	redirect(base_url());
		//}
		//$this->load->model('jadwalM');
		//$this->load->model('guruM');
		$this->load->model('bukuModel');
  }
	public function index()
	{
        $data['buku']=$this->bukuModel->getAllBook();
		$this->load->view('mainView',$data);
    }
    public function tambahBuku(){
        if(!empty($this->input->post('submit'))){
            $data=array(
                'name'=>$this->input->post('name'),
                'stok'=>$this->input->post('stok'),
                'category'=>$this->input->post('category'),
                'deskripsi'=>$this->input->post('deskripsi'),
                'image'=>"NA",
            );
            $this->bukuModel->addBook($data);
            redirect(base_url());
        }else{
            $this->load->view('addView');
        }
    }
    public function editBuku($id){
        if(!empty($this->input->post('submit'))){
            $data=array(
                'name'=>$this->input->post('name'),
                'stok'=>$this->input->post('stok'),
                'category'=>$this->input->post('category'),
                'deskripsi'=>$this->input->post('deskripsi'),
                'image'=>"NA",
            );
            $this->bukuModel->editBook($id,$data);
            redirect(base_url());
        }else{
            $data["buku"]=$this->bukuModel->getBook($id);
            $this->load->view('editView',$data);
        }
    }
    public function deleteBuku($id){      
        $this->bukuModel->delBook($id);
        redirect(base_url());
    }
}