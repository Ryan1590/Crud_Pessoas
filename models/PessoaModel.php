<!--Consultas/Regrra de negocio-->
<?php 
require_once('./configuration/connect.php');

class PessoaModel extends Connect{ //extensão da minha classe de conexao
private $table;

    function __construct()
    {
        parent::__construct();
        $this->table="desenvolvedor";
    }

    function getAll() // metodo listar
    {
        $sqlSelect = $this->connection->query("
        SELECT d.*, n.nome AS nome_nivel
        FROM $this->table d
        JOIN nivel n ON d.nivel_id = n.id
    ");
        $resultadoQuery = $sqlSelect->fetchAll();
        return $resultadoQuery;
    }

    function inserir($nome, $sexo, $data_nascimento, $idade, $hobby, $nivel_id)  // metodo insert
    {
        $sqlInsert = $this->connection->prepare("INSERT INTO $this->table (nome, sexo, data_nascimento, idade, hobby, nivel_id ) VALUES (:nome, :sexo, :data_nascimento, :idade, :hobby, :nivel_id)");
        $sqlInsert->bindParam(':nome', $nome);
        $sqlInsert->bindParam(':sexo', $sexo);
        $sqlInsert->bindParam(':data_nascimento', $data_nascimento);
        $sqlInsert->bindParam(':idade', $idade);
        $sqlInsert->bindParam(':hobby', $hobby);
        $sqlInsert->bindParam(':nivel_id', $nivel_id);
        $sqlInsert->execute();
    }

    function atualizar($id, $nome, $sexo, $data_nascimento, $idade, $hobby, $nivel_id)
    {
        $sqlUpdate = $this->connection->prepare("UPDATE $this->table SET nome = :nome, sexo = :sexo, data_nascimento = :data_nascimento, idade = :idade, hobby = :hobby, nivel_id = :nivel_id WHERE id = :id");
        $sqlUpdate->bindParam(':id', $id);
        $sqlUpdate->bindParam(':nome', $nome);
        $sqlUpdate->bindParam(':sexo', $sexo);
        $sqlUpdate->bindParam(':data_nascimento', $data_nascimento);
        $sqlUpdate->bindParam(':idade', $idade);
        $sqlUpdate->bindParam(':hobby', $hobby);
        $sqlUpdate->bindParam(':nivel_id', $nivel_id);
        $sqlUpdate->execute();
    }

    function delete($id) // metodo delete
    {
        $sqlDelete = $this->connection->prepare("DELETE FROM $this->table  WHERE id = :id");
        $sqlDelete->bindParam(':id', $id);
        $sqlDelete->execute();
    }

}

?>