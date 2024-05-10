<?php
require_once('./models/PessoaModel.php');
require_once('./models/NivelModel.php');

class PessoasController {
    private $modelPessoas;
    private $modelNiveis;

    public function __construct() {
        $this->modelPessoas = new PessoaModel();
        $this->modelNiveis = new NivelModel();
    }

    public function index() {
        $resultadoData = $this->modelPessoas->getAll();
        $niveis = $this->modelNiveis->getAll();
        require_once('./views/index.php');
    }

    public function inserir() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $data_nascimento = $_POST['data_nascimento'];
            $idade = $_POST['idade'];
            $hobby = $_POST['hobby'];
            $nivel_id = $_POST['nivel_id']; 
            $this->modelPessoas->inserir($nome, $sexo, $data_nascimento, $idade, $hobby, $nivel_id);
            header('Location: index.php');
            exit(); 
        }
    }
    
    public function atualizar() {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $data_nascimento = $_POST['data_nascimento'];
            $idade = $_POST['idade'];
            $hobby = $_POST['hobby'];
            $nivel_id = $_POST['nivel_id']; 
            $this->modelPessoas->atualizar($id, $nome, $sexo, $data_nascimento, $idade, $hobby, $nivel_id);
            header("Location: index.php");
            exit();
        }
    }

    public function delete() {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $id = $_POST['id'];
            $this->modelPessoas->delete($id);
            header("Location: index.php");
            exit();
        } else {
            header("Location: erro.php");
            exit();
        }
    }
}

?>