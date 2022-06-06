<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cadastro</title>
    </head>
    <body>
    <h1>Criar cadastro</h1>
        <div class="container mt-5 card-header">
            <h1 class="mb-5">Configuração do Responsavel</h1>
            <form action="acao/inserir.php" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-9">


                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="nomeResponsavel"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senhaEmail"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="senha">Repita a senha</label>
                            <input type="password" class="form-control" name="Repetesenha"/>
                        </div>
                        
                    </div>
                </div>
                
            </form>
        </div>

        <div class="container mt-5 card-header">
            <h1 class="mb-5">Configuração do criança</h1>
            <form action="acao/inserir.php" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="name">Nome da criança</label>
                            <input type="text" class="form-control" name="nomeCrianca"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="email">Idade</label>
                            <input type="text" class="form-control" name="idade"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="serie">Série escolar</label>
                            <input type="text" class="form-control" name="serie"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sexo">Sexo</label>
                            <input type="sexo" class="form-control" name="sexo"/>
                            <input type="radio" name="sexo" value="F">Feminino
                            <input type="radio" name="sexo" value="M">Masculino
                        
                        </div>
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Cadastrar</a>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>