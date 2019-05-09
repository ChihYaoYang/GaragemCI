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
                                        echo '<td><img src="'. base_url('public/uploads/'.$row->imagem) . '" width="50"></td>';
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