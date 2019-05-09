<div class="container">
    <div class="row">
        <!--Veículo cadastrados--->
        <div class="col">
            <h3>Gerenciador de Marca</h3> <hr>
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"><i class="fas fa-truck"></i>Marca cadastrados</h3>
                <div class="card-body">
                    <a class="btn btn-primary" href="<?= base_url() . 'index.php/Marca/cadastrar/' ?>">Add marca</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <br>
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
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Marca</th>
                                    <th scope="col">Produtos</th>
                                    <th scope="col">Opção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($marca as $row) {
                                    echo '<tr class="text-center">';
                                    echo '<td>' . $row->nome . '</td>';
                                    echo '<td>' . $row->produtos . '</td>';
                                    echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . base_url() . 'index.php/Marca/deletar/' . $row->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                    '<a class="btn btn-sm btn-outline-warning" href="' . base_url() . 'index.php/Marca/alterar/' . $row->id . '"><i class="fas fa-edit"></i> Alterar</a>'
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