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
        <style>
            .breathe-div {
                border: 1px solid #2b92d4;
                border-radius: 15%;
                box-shadow: 0 1px 2px rgba(255, 255, 255, 1);
                overflow: hidden;
                -webkit-animation-timing-function: linear;
                /*緩動 分為 "linear" "ease-in" "ease-out" "ease-in-out" */
                -webkit-animation-name: breathe;
                -webkit-animation-duration: 1500ms;
                /* time animation*/
                -webkit-animation-iteration-count: infinite;
                /*loop animation*/
                -webkit-animation-direction: alternate;
                /*呼吸 animation*/
            }
            @-webkit-keyframes breathe {
                0% {
                    opacity: .4;
                    box-shadow: 0 1px 2px rgba(204, 193, 193, 0.30), 0 1px 1px rgba(204, 193, 193, 0.30) inset;
                }
                100% {
                    opacity: 1;
                    border: 1px solid rgba(255, 255, 255, 1);
                    box-shadow: 0 1px 30px #0093df, 0 1px 20px #0093df inset;
                }
            }
        </style>
        <!---Menu--->
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a class="navbar-brand breathe-div" href="<?= $this->config->base_url(); ?>"><i class="fas fa-store"></i>
                Sistema Gincana</a>
            <!---Menu mobile--->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                            <a href="<?= $this->config->base_url() . 'index.php/Marca/listar' ?>"
                               class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'index.php/Marca/cadastrar' ?>"
                               class="dropdown-item">Cadastrar</a>
                       
                    </li>
                </ul>
            </div>
        </nav>
        <!---Bootstrap--->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>