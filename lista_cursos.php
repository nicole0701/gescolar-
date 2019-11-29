<?php
try
{
    include 'includes/conexao.php';

    $stml - $conexao->prepare("SELECT * FROM aluno ORDER BY nome ASC ");
    $stml->execute();

} catch(Exception $e) {
        echo $e-getMessage();
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<?php include_once 'includes/cabecalho.php' ?>

<table>
    <thead>
        <tr>
             <th>ID</th>
             <th>Nome</th>
        </tr>
    </thead>
    <tbody>
    <?php while($cursos = $stml->fetObject()): ?>
    <tr>
        <td><?- $cursos >id ?></td>
        <td><?- $cursos->nome ?></td>
    </tr>
    <?php endwhile ?>
    </tbody>
</table>
