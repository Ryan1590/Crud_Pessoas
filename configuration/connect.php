<!--conexao com o banco-->

<?php 

define('HOST', 'localhost');
define('DATABASENAME', 'crud_pessoas');
define('USER', 'root');
define('PASSWORD', 'root');


class Connect{
    protected $connection; //protected pode ser usado na mesma classe e em outras class que podem erdar 

    function __construct()  // construtor
    {
        $this->connectDatabase();
    }

    function connectDatabase()
    {
        try
        {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
        }
        catch (PDOException $e)
        {
            echo "Error!".$e->getMessage();
        }
    }

}

?>




