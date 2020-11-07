<!-- Criar um arquivo html de nome formularioenvio.html
Criar uma tag <form> para que o usuário informe os seguintes dados:

-->

<form action="exercicio03-1.php" method="post">
    <label for='nome'>Nome: </label><br>
    <input type="text" col="40"id="nome" name="nome" placeholder="Digite seu nome."><br>
    <label for="senha">Digite sua senha: </label><br>
    <input type="password" col="40" id="senha" name="senha" placeholder="Digite sua senha."><br>
    <label for="genero">GÊNERO</label><br>

    <label for="M">M</label><input type="radio"id="M" name="genero" value="Masculino">
    <label for="F">F</label><input type="radio"id="F" name="genero" value="Feminino">
    <label for="NB">NB</label><input type="radio"id="NB" name="genero" value="Não Binario"checked>

    <button type="submit">Enviar</button>
</form>