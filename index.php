<?php
require_once('./controllers/pessoasController.php');
require_once('./controllers/niveisController.php');

// Ativar exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

$action = !empty($_GET['a']) ? $_GET['a'] : 'index'; // Padrão para index se nenhum parâmetro 'a' for fornecido

try {
    switch ($action) {
        case 'index':
            $pessoasController = new PessoasController();
            $pessoasController->index();
            break;

        case 'inserir':
            $pessoasController = new PessoasController();
            $pessoasController->inserir(); // Chamar o método inserir() do controlador
            break;

            case 'atualizar':
                $pessoasController = new PessoasController();
                $pessoasController->atualizar(); // Chamar o método atualizar() do controlador
                break;

                case 'delete':
                    $pessoasController = new PessoasController();
                    $pessoasController->delete(); // Chamar o método delete() do controlador
                    break;
        default:
            throw new Exception("Rota inválida: " . $action);
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>


