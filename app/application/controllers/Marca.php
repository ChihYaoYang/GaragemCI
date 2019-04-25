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
        $this->listar();
    }

    //Read
    public function listar() {
        //Carrega Model
        $this->Marca_model;
        //Chama método e criar $dado para armazena dados e fazer no view
        $data['marca'] = $this->Marca_model->getAll();
        //Chama view
        $this->load->view('marca/lista', $data);
    }

    //Create
    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        if ($this->form_validation->run() == false) {
            //Se for false carrega marca de novo e preencher todos campos
            $this->load->view('marca/cadastro');
        } else {
            //Se for True carrega model
            $this->Marca_model;
            //E resgata dados de POST
            $data = array(
                'nome' => $this->input->post('descricao')
            );
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Marca_model->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Marca cadastrado com sucesso! ! !');
                redirect('Marca/listar');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao cadastrar Marca *_*');
                redirect('Marca/cadastrar');
            }
        }
    }

    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            $this->Marca_model;
            if ($this->Marca_model->delete($id) > 0) {
                $this->session->set_flashdata('mensagem', 'Marca deletado com sucesso ! ! !');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao cadastrar Marca *_*');
            }
        }
        redirect('Marca/listar');
    }

    //Update
    public function alterar($id) {
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
                    $this->session->set_flashdata('mensagem', 'Marca alterado com sucesso ! ! !');
                    redirect('Marca/listar');
                } else {
                    $this->session->set_flashdata('erro', 'Falha ao alterar Marca *_*');
                    redirect('Marca/alterar', $id);
                }
            }
        } else {
            redirect('Marca/listar');
        }
    }
}