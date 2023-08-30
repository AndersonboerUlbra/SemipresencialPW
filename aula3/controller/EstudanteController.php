<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/EstudanteModel.php';

class EstudanteController {
    public function listar() {
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listar();

        $_REQUEST['estudantes'] = $listaEstudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/EstudanteView.php';
    }
    public function salvar(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/EstudanteForm.php';
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $estudanteModel = new EstudanteModel();
        $estudanteModel->salvar($nome,$idade);   

        header('location: http://localhost:8081/aula3/?class=Estudante&acao=salvar');
        exit();
        }



    }
}