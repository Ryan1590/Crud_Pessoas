<!--Rotas/ chamada de metodos-->
<?php
require_once('./controllers/niveisController.php');

$action = !empty( $_GET['a']) ? $_GET['a'] : 'getAll'; //Nesta linha, o código verifica se há um parâmetro 'a' na URL usando $_GET['a']. Se esse parâmetro estiver presente e não estiver vazio, ele atribui seu valor à variável $action. Caso contrário, ele define $action como 'getAll'.
$controller = new NiveisController ();// Aqui, você instancia a classe pessoasController, criando um objeto $controller que representa esse controlador.

$controller->{$action}();

?>