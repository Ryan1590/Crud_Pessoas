<?php
require_once('./models/nivel.php');

class NiveisController{
    private $model;

    public function __construct(){
        $this->model = new NivelModel;  //estanciando  class do arquivo models/  nivel.php
    }
     
    function getAll()  // chamando o metodo
    { 
        $resultado = $this->model->getAll();
        require_once('./views/niveis.php');
    }

    function inserir() // chamando o metodo
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $nome = $_POST['nome'];
            $this->model->insert($nome);
        }
        header('Location: niveis.php'); // Redireciona de volta para a página principal após a inserção
        exit();
    }

    function atualizar()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST') 
        {
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $this->model->atualizar($id,  $nome); // chamando o metodo
            header("location: niveis.php");
            exit();
        }
    }

    function delete()  // chamando o metodo
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST')  
        {
            $id = $_POST['id'];
            $this->model->delete($id);
            header("location: niveis.php");
            exit();
        } else { 
            header("location: erro.php");
            exit();
        }
    }

}

?>