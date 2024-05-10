<!--Listagem de registros-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./views/alertPessoa.js"></script>
    <title>Pessoas</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">CRUD Pessoas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="niveis.php">CRUD Níveis</a>
                    </li>
                </ul>
            </div>
        </div>
<<<<<<< HEAD
    </nav>

<div class="container">
    <div class="mt-4 text-center p-4 border rounded shadow">
        <h1 class="mt-4 font-weight-bold">Crud Pessoas</h1>
    </div>
</div>

<div class="container">
    <div>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalInserir">
            Inserir Nova Pessoa
        </button>
        <div class="modal fade" id="modalInserir" tabindex="-1" aria-labelledby="modalInserirLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalInserirLabel">Inserir Nova Pessoa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="?a=inserir" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Desenvolvedor:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                            <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo:</label>
                                <select class="form-select" id="sexo" name="sexo" required>
                                    <option value="">Selecione...</option>
                                    <option value="Masculino">M</option>
                                    <option value="Feminino">F</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="data_nascimento" class="form-label">Data Nascimento:</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>

                            <div class="mb-3">
                                <label for="idade" class="form-label">Idade:</label>
                                <input type="number" class="form-control" id="idade" name="idade" required>
                            </div>

                            <div class="mb-3">
                                <label for="hobby" class="form-label">Hobby:</label>
                                <input type="text" class="form-control" id="hobby" name="hobby">
                            </div>

                            <div class="mb-3">
                                <label for="nivel_id" class="form-label">Nível:</label>
                                <select name="nivel_id" id="nivel_id" class="form-select" required>
                                    <option value="" selected disabled>Selecione o nível</option>
                                    <?php foreach ($niveis as $item) : ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['nome'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Inserir</button>
                        </form>
=======
</nav>

<div class="container mt-4">
    <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalInserir">
            Inserir Nova Pessoa
    </button>
</div>

<div class="container mt-2" >
    <div class="p-4 border rounded bg-white shadow">
        <h1 class="mb-4">Pessoas</h1>
        <div>
           
            <div class="modal fade" id="modalInserir" tabindex="-1" aria-labelledby="modalInserirLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalInserirLabel">Inserir Nova Pessoa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="?a=inserir" method="POST">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Desenvolvedor:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>

                                <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo:</label>
                                    <select class="form-select" id="sexo" name="sexo" required>
                                        <option value="">Selecione...</option>
                                        <option value="Masculino">M</option>
                                        <option value="Feminino">F</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="data_nascimento" class="form-label">Data Nascimento:</label>
                                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                                </div>

                                <div class="mb-3">
                                    <label for="idade" class="form-label">Idade:</label>
                                    <input type="number" class="form-control" id="idade" name="idade" required>
                                </div>

                                <div class="mb-3">
                                    <label for="hobby" class="form-label">Hobby:</label>
                                    <input type="text" class="form-control" id="hobby" name="hobby">
                                </div>

                                <div class="mb-3">
                                    <label for="nivel_id" class="form-label">Nível:</label>
                                    <select name="nivel_id" id="nivel_id" class="form-select" required>
                                        <option value="" selected disabled>Selecione o nível</option>
                                        <?php foreach ($niveis as $item) : ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['nome'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Inserir</button>
                            </form>
                        </div>
>>>>>>> c915351e1ded3273692266c1251b25d7d2ea7e9a
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>

    <div class="content">
        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Data Nascimento</th>
                    <th>Idade</th>
                    <th>Hobby</th>
                    <th>Nível</th>
                    <th>Ações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultadoData as $p) : ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nome'] ?></td>
                        <td><?= $p['sexo'] ?></td>
                        <td><?= $p['data_nascimento'] ?></td>
                        <td><?= $p['idade'] ?></td>
                        <td><?= $p['hobby'] ?></td>
                        <td><?= $p['nome_nivel'] ?></td>

                        <td>
                            <form id="formEditar<?= $p['id'] ?>" action="?a=editar" method="POST" style="display: inline;">
                                <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#modalEditar<?= $p['id'] ?>"
                                    data-id="<?= $p['id'] ?>" data-nome="<?= $p['nome'] ?>"  data-nome="<?= $p['sexo'] ?>"  data-nome="<?= $p['data_nascimento'] ?>" data-nome="<?= $p['idade'] ?>" data-nome="<?= $p['hobby'] ?>" data-nome="<?= $p['nome_nivel'] ?>">
                                    <i class="bi bi-pencil-fill"></i> Editar
                                </a>
                            </form>
                        </td>
                        <td>
                            <form id="formExclusao<?= $p['id'] ?>" action="?a=delete" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                <button type="button" class="btn btn-danger" onclick="confirmacaoExclusao(<?= $p['id'] ?>);">
                                    <i class="bi bi-trash-fill"></i> Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

    <?php foreach ($resultadoData as $p) : ?>
        <div class="modal fade" id="modalEditar<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalEditarLabel<?= $p['id'] ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarLabel<?= $p['id'] ?>">Editar Nome:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="?a=atualizar&id=<?= $p['id'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome<?= $p['id'] ?>" name="nome" value="<?= $p['nome'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="sexo">Sexo</label>
                                <select class="form-select" id="sexo<?= $p['id'] ?>" name="sexo" required>
                                <option value="<?= $p['sexo'] ?>" <?= $p['sexo'] != 'M' && $p['sexo'] != 'F' ? 'selected' : '' ?>><?= $p['sexo'] ?></option>
                                    <option value="Masculino" <?= $p['sexo'] == 'M' ? 'selected' : '' ?>>M</option>
                                    <option value="Feminino" <?= $p['sexo'] == 'F' ? 'selected' : '' ?>>F</option>
                                    <option value="outro" <?= $p['sexo'] == 'F' ? 'selected' : '' ?>>Outro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="data_nascimento">Data Nascimento</label>
                                <input type="text" class="form-control" id="data_nascimento<?= $p['id'] ?>" name="data_nascimento" value="<?= $p['data_nascimento'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="idade">Idade</label>
                                <input type="text" class="form-control" id="idade<?= $p['id'] ?>" name="idade" value="<?= $p['idade'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="hobby">Hobby</label>
                                <textarea class="form-control" id="hobby<?= $p['hobby'] ?>" name="hobby" required><?= $p['hobby'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="nivel_id" class="form-label">Nível:</label>
                                <select name="nivel_id" id="nivel_id" class="form-select" required>
                                    <?php foreach ($niveis as $nivel) : ?>
                                        <option value="<?= $nivel['id'] ?>" <?= $nivel['id'] == $p['nivel_id'] ? 'selected' : '' ?>><?= $nivel['nome'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"  onclick="atualizar(<?= $p['id'] ?>);">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
=======

        <div class="content">
            <table class="table table-striped table-hover table-bordered table-responsive">
                <thead class="table-white">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data Nascimento</th>
                        <th>Idade</th>
                        <th>Hobby</th>
                        <th>Nível</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultadoData as $p) : ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= $p['nome'] ?></td>
                            <td><?= $p['sexo'] ?></td>
                            <td><?= $p['data_nascimento'] ?></td>
                            <td><?= $p['idade'] ?></td>
                            <td><?= $p['hobby'] ?></td>
                            <td><?= $p['nome_nivel'] ?></td>

                            <td>
                                <form id="formEditar<?= $p['id'] ?>" action="?a=editar" method="POST" style="display: inline;">
                                    <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#modalEditar<?= $p['id'] ?>"
                                        data-id="<?= $p['id'] ?>" data-nome="<?= $p['nome'] ?>"  data-nome="<?= $p['sexo'] ?>"  data-nome="<?= $p['data_nascimento'] ?>" data-nome="<?= $p['idade'] ?>" data-nome="<?= $p['hobby'] ?>" data-nome="<?= $p['nome_nivel'] ?>">
                                        <i class="bi bi-pencil-fill"></i> Editar
                                    </a>
                                </form>
                            </td>
                            <td>
                                <form id="formExclusao<?= $p['id'] ?>" action="?a=delete" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                    <button type="button" class="btn btn-danger" onclick="confirmacaoExclusao(<?= $p['id'] ?>);">
                                        <i class="bi bi-trash-fill"></i> Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php foreach ($resultadoData as $p) : ?>
    <div class="modal fade" id="modalEditar<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalEditarLabel<?= $p['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel<?= $p['id'] ?>">Editar Nome:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="?a=atualizar&id=<?= $p['id'] ?>" method="POST">
                        <div class="mb-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome<?= $p['id'] ?>" name="nome" value="<?= $p['nome'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo">Sexo</label>
                            <select class="form-select" id="sexo<?= $p['id'] ?>" name="sexo" required>
                            <option value="<?= $p['sexo'] ?>" <?= $p['sexo'] != 'M' && $p['sexo'] != 'F' ? 'selected' : '' ?>><?= $p['sexo'] ?></option>
                                <option value="Masculino" <?= $p['sexo'] == 'M' ? 'selected' : '' ?>>M</option>
                                <option value="Feminino" <?= $p['sexo'] == 'F' ? 'selected' : '' ?>>F</option>
                                <option value="outro" <?= $p['sexo'] == 'F' ? 'selected' : '' ?>>Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="data_nascimento">Data Nascimento</label>
                            <input type="text" class="form-control" id="data_nascimento<?= $p['id'] ?>" name="data_nascimento" value="<?= $p['data_nascimento'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="idade">Idade</label>
                            <input type="text" class="form-control" id="idade<?= $p['id'] ?>" name="idade" value="<?= $p['idade'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="hobby">Hobby</label>
                            <input type="text" class="form-control" id="hobby<?= $p['hobby'] ?>" name="hobby" value="<?= $p['hobby'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="nivel_id" class="form-label">Nível:</label>
                            <select name="nivel_id" id="nivel_id" class="form-select" required>
                                <?php foreach ($niveis as $nivel) : ?>
                                    <option value="<?= $nivel['id'] ?>" <?= $nivel['id'] == $p['nivel_id'] ? 'selected' : '' ?>><?= $nivel['nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary"  onclick="atualizar(<?= $p['id'] ?>);">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php
    if (isset($_SESSION['atualizar'])) {
        echo "<script>";
        echo "atualizar('{$_SESSION['atualizar']['tipo']}', '{$_SESSION['atualizar']['mensagem']}');";
        echo "</script>";
        unset($_SESSION['atualizar']);
    }
?>
>>>>>>> c915351e1ded3273692266c1251b25d7d2ea7e9a

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btn-editar').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.id;
                const nome = this.dataset.nome;
                const modalEditar = new bootstrap.Modal(document.querySelector(`#modalEditar${id}`));
                document.querySelector(`#nome${id}`).value = nome;
                modalEditar.show();
            });
        });
         document.querySelectorAll('.modal .btn-close').forEach(btnClose => {
            btnClose.addEventListener('click', function() {
                window.location.href = 'index.php';
            });
        });
    });
</script>

</body>
</html>