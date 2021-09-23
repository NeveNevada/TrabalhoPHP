<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

        <link href="css/form.css" rel="stylesheet">

    <title>Cadastro</title>
</head>
    <body class="gradient">
        <div class="container">
            <h2>Cadastre-se</h2>
            <br>
            <h3>Informações de usuário</h3>
            <br>
            <form id="batatinha" class="row g-3" action="php/cadastrar.php" method="POST">
                <div class="col-md-6">
                    <label form="text">Nome completo</label>
                    <input type="text" class="form-control" name="nomeCompleto" placeholder="Insira seu nome completo" id="nomecomp" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label form="text">Usuário</label>
                    <input type="text" class="form-control" name="usuario" placeholder="@usuario" id="usuario" required>
                </div>
                <br>
                <div class="col-12">
                    <label form="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email" id="email" required>
                </div>
                <br>
                <div class="col-12">
                    <label form="password">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" id="senha" required>
                </div>
                <br>
                <div class="col-12">
                    <label form="password">Confirmar senha</label>
                    <input type="password" class="form-control" name="senhaConf" placeholder="Confirme sua senha" id="confsenha" required>
                </div>
                <br>
                <div class="col-md-6">
                <label for="genero">Gênero</label>
                <select class="form-select" aria-label="Default select example" name="genero">
                    <option value="1">Feminino</option>
                    <option value="2">Masculino</option>
                    <option value="3">Outros</option>
                </select>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="date">Data de nascimento</label>
                    <input type="date" class="form-control" id="data" name="date" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="number">CPF</label>
                    <input type="number" class="form-control" name="cpf" placeholder="Digite seu CPF" id="cpf" maxlength="14" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" placeholder="Digite seu telefone" id="ntelefone" required>
                </div>
                <br>
                <div class="col-md-12">
                    <br>
                    <h3>Informações de localização</h3>
                    <label for="text">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite seu CEP" maxlength="9" required>
                </div>
                <br>
                <div class="col-md-12">
                    <label for="text">Endereço</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" id="endereço" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text">UF</label>
                    <input type="text" class="form-control" name="uf" placeholder="Digite seu estado" id="estado" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text">Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade" id="cidade" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="number">Número</label>
                    <input type="number" class="form-control" name="numero" placeholder="Digite o número da residência" id="numero" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label form="text">Complemento</label>
                    <input type="text" class="form-control" name="complemento" placeholder="Casa, Bloco, Apart, etc..." id="complemento" required>
                </div>
                <br>
                <div class="col-12">
                    <input class="btn btn-secondary" type="submit" id="botaozinho" onclick="entrar()">Cadastrar>
                </div>
            </form>  
        </div>
        
        <script src="Form/js/form.js"></script>
    </body>
</html>