
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form produto</title>
</head>
<div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
</div>
<div class="col-md-10 p-5">
                <h3 class="text-center">Cadastro de produto</h3>
                <div class="bg-light p-5">
                    <form action="cadastraProduto.php" method="post">
                    <div class="mb-3">
                            <label class="form-label" for="nome">Nome do produto</label>
                            <input class="form-control" name="nome" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="descricao">Descrição</label>
                            <textarea name="descricao" class="form-control">
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="valor">Valor</label>
                            <input class="form-control" name="valor" type="number">
                        </div>
                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <button class="btn btn-outline-success" type="submit">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
</html>
