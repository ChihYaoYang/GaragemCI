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