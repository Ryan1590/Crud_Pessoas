<?php 
require_once('./configuration/connect.php');

class nivelModel extends Connect {
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = "nivel";
    }

    function getAll() // método listar
    {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
        $resultadoQuery = $sqlSelect->fetchAll();
        return $resultadoQuery;
    }


    function insert($nome)  // metodo insert
    {
        $sqlInsert = $this->connection->prepare("INSERT INTO $this->table (nome) VALUES (:nome)");
        $sqlInsert->bindParam(':nome', $nome);
        $sqlInsert->execute();
    }

    function atualizar($id, $nome) // metodo editar
    {
        $sqlUpdate = $this->connection->prepare("UPDATE $this->table SET nome = :nome WHERE id = :id");
        $sqlUpdate->bindParam(':id', $id);
        $sqlUpdate->bindParam(':nome', $nome);
        $sqlUpdate->execute();
    }
    
    function delete($id) 
    {
        $sqlCheck = $this->connection->prepare("SELECT COUNT(*) as total FROM desenvolvedor WHERE nivel_id = :nivel_id");
        $sqlCheck->bindParam(':nivel_id', $id);
        $sqlCheck->execute();
        $result = $sqlCheck->fetch(PDO::FETCH_ASSOC);


        if ($result['total'] > 0) 
        {
             if (isset($_SESSION['formExcluir'])) {
                echo "<script>";
                echo "formExcluir('{$_SESSION['formExcluir']['tipo']}', '{$_SESSION['formExcluir']['mensagem']}');";
                echo "</script>";
                unset($_SESSION['formExcluir']);
            }

        if ($result['total'] > 0) {
            echo "Não é possivel Excluir, a niveis associados";
        } else {

        $sqlDelete = $this->connection->prepare("DELETE FROM $this->table  WHERE id = :id");
        $sqlDelete->bindParam(':id', $id);
        $sqlDelete->execute();

}


?>