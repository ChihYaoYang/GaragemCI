<?php

/*
 *  @author Yang
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculo extends CI_Controller {

    //Construct
    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('Veiculo_model');
        $this->load->model('Marca_model');
    }

    public function index() {
        $data['veiculo'] = $this->Veiculo_model->getAll();
        //Carrega Menu
        $this->load->view('includes/header');
        $this->load->view('veiculo/lista', $data);
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    //Create
    public function cadastro() {
        //Chama model da marca
        $data['marca'] = $this->Marca_model->getAll();
        //Carrega Menu
        $this->load->view('includes/header');
        //E passa data['marca'] para cadastro veiculo
        $this->load->view('veiculo/cadastro',$data);
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        //Form_validation
        $this->form_validation->set_rules('modelo', 'modelo', 'required');
        $this->form_validation->set_rules('preco', 'preco', 'required');
        $this->form_validation->set_rules('marca_id', 'marca_id', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == false) {
            //Se for false carrega veiculo de novo e preencher todos campos
            $this->cadastro();
        } else {
            //Se for True carrega model
            $this->Veiculo_model;
             //E resgata dados de POST
            $data = array(
                'modelo' => $this->input->post('modelo'),
                'preco' => $this->input->post('preco'),
                'marca_id' => $this->input->post('marca_id'),
                'status' => $this->input->post('status')
            );
            //IMG
            if (!empty($_FILES['imagem']['name'])) {
                $config['upload_path'] = './public/uploads';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024; 
                $config['max_height'] = 768; 
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('imagem')) {
                    $this->session->set_flashdata('erro', 'Erro ao cadastrar imagem *_*' . $this->upload->display_errors());
                    redirect('Veiculo/cadastrar');
                    exit();
                } else {
                    $data['imagem'] = $this->upload->data()['file_name'];
                }
            }
           
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Veiculo_model->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Veículo cadastrado com sucesso! ! !');
                //Chama método de controller
                redirect('Veiculo/index');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao cadastrar Veículo *_*');
                redirect('Veiculo/cadastrar');
            }
        }
    }
    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            $this->Veiculo_model;
            if ($this->Veiculo_model->delete($id) > 0) {
                $this->session->set_flashdata('mensagem', ' Veículo deletado com sucesso! ! !');
            } else {
                 $this->session->set_flashdata('erro', ' Erro ao deletar Veículo *_*');
            }
        }
        redirect('Veiculo/index');
    }
}