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
        <div class="container">
            <div class="row">
                <!--Veículo cadastrados--->
                <div class="col">
                    <h3>Gerenciador de Veículo</h3> <hr>
                    <!---Card--->
                    <div class="card">
                        <h3 class="card-header bg-transparent"><i class="fas fa-truck"></i>Veículo cadastrados</h3>
                        <div class="card-body">
                            <a class="btn btn-primary" href="<?= base_url() . 'index.php/Veiculo/cadastrar/' ?>">Add Veículo</a>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <br>
                                    <?php
                                    $mensagem = $this->session->flashdata('mensagem');
                                    if (isset($mensagem)) {
                                        echo '<div class="alert alert-success"> <i class="fas fa-check"></i>' . $mensagem . '</div>';
                                    }
                                    $erro = $this->session->flashdata('erro');
                                    if (isset($erro)) {
                                        echo '<div class="alert alert-danger" role="alert"><i class="fas fa-times"></i> ' . $erro . '</div>';
                                    }
                                    ?>
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Imagem</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Preço</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Opção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($veiculo as $row) {
                                            echo '<tr class="text-center">';
                                            if (!empty($row->imagem)) {
                                                echo '<td><img src="./public/uploads' . $row->imagem . '" width="50"></td>';
                                            } else {
                                                echo '<td><img src="https://encurtador.com.br/cjsER" width="50"></td>';
                                            }
                                            echo '<td>' . $row->modelo . '</td>';
                                            echo '<td>' . $row->preco . ' R$' . '</td>';
                                            echo '<td>' . $row->nome . '</td>';
                                            echo '<td>' . $row->status . '</td>';
                                            echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . base_url() . 'index.php/Veiculo/deletar/' . $row->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                            '<a class="btn btn-sm btn-outline-warning" href="' . base_url() . 'index.php/Veiculo/alterar/' . $row->id . '"><i class="fas fa-edit"></i> Alterar</a>'
                                            . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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