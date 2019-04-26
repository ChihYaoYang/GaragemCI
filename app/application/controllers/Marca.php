<?php
/*
 *  @author Yang
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Marca extends CI_Controller {
    //Construct
    public function __construct() {
        parent::__construct();
        $this->load->model('Marca_model');
    }
    public function index() {
        $data['marca'] = $this->Marca_model->getAll();
        //Carrega Menu
        $this->load->view('includes/header');
        $this->load->view('marca/lista', $data);
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    //Create
    public function cadastro() {
        //Carrega Menu
        $this->load->view('includes/header');
        $this->load->view('marca/cadastro');
        //Carrega rodapé
        $this->load->view('includes/footer');
    }
    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        if ($this->form_validation->run() == false) {
            //Se for false carrega marca de novo e preencher todos campos
            $this->cadastro();
        } else {
            //Se for True carrega model
            $this->Marca_model;
            //E resgata dados de POST
            $data = array(
                'nome' => $this->input->post('descricao')
            );
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Marca_model->insert($data)) {
                $this->session->set_flashdata('mensagem', ' Marca cadastrado com sucesso! ! !');
                redirect('Marca/index');
            } else {
                $this->session->set_flashdata('erro', ' Erro ao cadastrar Marca *_*');
                redirect('Marca/cadastrar');
            }
        }
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            $this->Marca_model;
            if ($this->Marca_model->delete($id) > 0) {
                $this->session->set_flashdata('mensagem', ' Marca deletado com sucesso! ! !');
            } else {
                 $this->session->set_flashdata('erro', ' Erro ao deletar Marca *_*');
            }
        }
        redirect('Marca/index');
    }

    //Update
    public function altero() {
        //Carrega Menu
        $this->load->view('includes/header');
        $this->load->view('marca/altero');
        //Carrega rodapé
        $this->load->view('includes/footer');
    }
    public function alterar($id) {
        //Carrega Menu
        $this->load->view('includes/header');
        //Valida e carrega model
        if ($id > 0) {
            $this->Marca_model;
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            if ($this->form_validation->run() == false) {
                //Get ID
                $data['marca'] = $this->Marca_model->getId($id);
                //Chama view e passa $data
                $this->load->view('marca/alterar', $data);
            } else {
                $data = array(
                    'nome' => $this->input->post('descricao')
                );
                if ($this->Marca_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', ' Marca alterado com sucesso! ! !');
                    redirect('Marca/index');
                } else {
                    $this->session->set_flashdata('erro', ' Erro ao alterar Marca *_*');
                    $this->load->view('marca/alterar');
                }
            }
        } else {
            redirect('Marca/index');
        }
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

}
