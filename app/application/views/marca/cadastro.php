<!DOCTYPE html>
<html>
    <head>
        <title>Marca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!---bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <!---Gerenciador de veículo--->
            <div class="row">
                <div class="col">
                    <!---Card--->
                    <div class="card mx-auto" style="max-width: 450px">
                        <h3 id="label-form" class="card-header bg-transparent"><i class="fas fa-edit"></i>Cadastro de Marca</h3>
                        <div class="card-body">
                            <!---Form--->
                            <form method="POST" action="">
                                <!--campo input--->
                                <?php
                                //Mensagem
                                $mensagem = $this->session->flashdata('mensagem');
                                if (isset($mensagem)) {
                                    echo '<div class="alert alert-success"> <i class="fas fa-check"></i>' . $mensagem . '</div>';
                                }
                                $erro = $this->session->flashdata('erro');
                                if (isset($erro)) {
                                    echo '<div class="alert alert-danger" role="alert"><i class="fas fa-times"></i> ' . $erro . '</div>';
                                }
                                ?>
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao">
                                <div>
                                    <hr>
                                    <!---campo botão--->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---Bootstrap--->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>