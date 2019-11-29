<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
if(isset($_REQUEST['cadastrar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql - "INSERT INTO alunos (nome, data_nascimento, sexo,
                                    genero, cpf, cidade, estado,
                                    bairro, rua, cep)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

        $stml = $conexao->preparar($sql);
        $stml->bindParam(1, $_REQUEST['nome']);
        $stml->bindParam(2, $_REQUEST['data_nascimento']);
        $stml->bindParam(3, $_REQUEST['sexo']);
        $stml->bindParam(4, $_REQUEST['genero']);
        $stml->bindParam(5, $_REQUEST['cpf']);
        $stml->bindParam(6, $_REQUEST['cidade']);
        $stml->bindParam(7, $_REQUEST['estado']);
        $stml->bindParam(8, $_REQUEST['bairro']);
        $stml->bindParam(9, $_REQUEST['rua']);
        $stml->bindParam(10, $_REQUEST['cep']);
        $stml->execute();

        echo "Aluno inserido com sucesso!";

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/validacao_cad_aluno.js"></script>

<?php include_once 'includes/cabecalho.php' ?>

<div>
<fieldset>
    <legend>Cadastro de Aluno </legend>
        <form action="cadastrar_alunos.php?cadastrar=true">
            <label>Nome: <input type="text" name="nome" required /> </label>
            <label>Cidade: <input type="text" name="cidade" required /> </label>
            <label>CEP: <input type="text" name="cep" required /> </label>
            <label>Bairro: <input type="text" name="bairro" required /> </label>
            <label>Rua: <input type="text" name="rua" required /> </label>
            <label>Estado: <input type="text" name="estado" required /> </label>
            <label>Data Nasc: <input type="text" name="data_nascimento" required /> </label>
            <button type="submit">Salvar</button>
        </form>
    </legend>
</div>
    