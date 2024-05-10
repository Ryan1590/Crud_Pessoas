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
    <script src="./views/alertNivel.js"></script>
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
        <h1 class="mt-4 font-weight-bold">Crud Níveis</h1>
    </div>
</div>

<div class="container">
    <div>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalInserir">
            Inserir Novo Nivel
        </button>
=======
</nav>

<div class="container mt-4">
    <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalInserir">
        Inserir Novo Nivel
    </button>
</div>

<div class="container mt-2">
    <div class="p-4 border rounded bg-white shadow">
            <h1 class="mb-4">Níveis</h1>
>>>>>>> c915351e1ded3273692266c1251b25d7d2ea7e9a
        <div class="modal fade" id="modalInserir" tabindex="-1" aria-labelledby="modalInserirLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalInserirLabel">Inserir Nivel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="?a=inserir" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nivel:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Inserir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>

    <?php foreach ($resultado as $p) : ?>
        <div class="modal fade" id="modalEditar<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalEditarLabel<?= $p['id'] ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarLabel<?= $p['id'] ?>">Editar Nivel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="?a=atualizar&id=<?= $p['id'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="nome">Nivel:</label>
                                <input type="text" class="form-control" id="nome<?= $p['id'] ?>" name="nome" value="<?= $p['nome'] ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary"  onclick="atualizar(<?= $p['id'] ?>);">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="content">
        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $p) : ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nome'] ?></td>
                        <td>
                            <form id="formEditar<?= $p['id'] ?>" action="?a=editar" method="POST" style="display: inline;">
                                <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#modalEditar<?= $p['id'] ?>"
                                    data-id="<?= $p['id'] ?>" data-nome="<?= $p['nome'] ?>">
                                    <i class="bi bi-pencil-fill"></i> Editar
                                </a>
                            </form>
                        </td>
                        <td>
                            <form id="formExcluir<?= $p['id'] ?>" action="?a=delete" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                <button type="button" class="btn btn-danger" onclick="excluir(<?= $p['id'] ?>);">
                                    <i class="bi bi-trash-fill"></i> Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
=======
       
        <?php foreach ($resultado as $p) : ?>
            <div class="modal fade" id="modalEditar<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalEditarLabel<?= $p['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEditarLabel<?= $p['id'] ?>">Editar Nivel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="?a=atualizar&id=<?= $p['id'] ?>" method="POST">
                                <div class="mb-3">
                                    <label for="nome">Nivel:</label>
                                    <input type="text" class="form-control" id="nome<?= $p['id'] ?>" name="nome" value="<?= $p['nome'] ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary"  onclick="atualizar(<?= $p['id'] ?>);">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="content">
            <table class="table table-striped table-hover table-bordered table-responsive">
                <thead class="table-white">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $p) : ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= $p['nome'] ?></td>
                            <td>
                                <form id="formEditar<?= $p['id'] ?>" action="?a=editar" method="POST" style="display: inline;">
                                    <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#modalEditar<?= $p['id'] ?>"
                                        data-id="<?= $p['id'] ?>" data-nome="<?= $p['nome'] ?>">
                                        <i class="bi bi-pencil-fill"></i> Editar
                                    </a>
                                </form>
                            </td>
                            <td>
                                <form id="formExcluir<?= $p['id'] ?>" action="?a=delete" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i> Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
>>>>>>> c915351e1ded3273692266c1251b25d7d2ea7e9a
    </div>
</div>

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
                window.location.href = 'niveis.php';
            });
        });
    });
</script>

</body>
</html>