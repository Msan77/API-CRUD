<?PHP
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM cadastros");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem de Usuários</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Situação</th>
        <th>Tipo de Pagamento</th>
        <th>Departamento</th>
        <th>Cargo</th>
        <th>Jornada Semanal</th>
        <th>% Adiantamento</th>
        <th>Salario</th>
        <th>Data de Admissão</th>
        <th>Tipo da Admissão</th>
        <th>Descrição da Função</th>
        <th>Nome Completo</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Deficiencia</th>
        <th>Estado Civil</th>
        <th>Grau de Instrução</th>
        <th>Nome do Pai</th>
        <th>Nome da Mãe</th>
        <th>CEP</th>
        <th>Tipo</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>UF</th>
        <th>IBGE</th>
        <th>Telefone Fixo</th>
        <th>Celular</th>
        <th>Email</th>
        <th>CPF</th>
        <th>RG</th>
        <th>Orgao Emissor</th>
        <th>PIS</th>
        <th>Titulo de Eleitor</th>
        <th>Zona</th>
        <th>Seção</th>
        <th>Certificado Serviço Militar</th>
        <th>CNH</th>
        <th>Categoria</th>
        <th>Data de Emissão</th>
        <th>Data de Vencimento</th>
        <th>CTPS</th>
        <th>Serie</th>
        <th>Data de Emissão - CNH</th>
        <th>RIC</th>
        <th>Instituição Bancaria</th>
        <th>Banco</th>
        <th>Agencia</th>
        <th>Numero da Conta</th>
        <th>Tipo da Conta</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['Situ'];?></td>
            <td><?=$usuario['Tp_pgto'];?></td>
            <td><?=$usuario['Depart'];?></td>
            <td><?=$usuario['Carg'];?></td>
            <td><?=$usuario['Jor_sema'];?></td>
            <td><?=$usuario['pp_adiant'];?></td>
            <td><?=$usuario['Sal'];?></td>
            <td><?=$usuario['Dt_Adm'];?></td>
            <td><?=$usuario['Tp_Adm'];?></td>
            <td><?=$usuario['Descri_fun'];?></td>
            <td><?=$usuario['Nm_comple'];?></td>
            <td><?=$usuario['Dt_nasc'];?></td>
            <td><?=$usuario['sex'];?></td>
            <td><?=$usuario['Defi'];?></td>
            <td><?=$usuario['Est_civi'];?></td>
            <td><?=$usuario['Gr_instru'];?></td>
            <td><?=$usuario['Nm_pai'];?></td>
            <td><?=$usuario['Nm_mae'];?></td>
            <td><?=$usuario['CEP'];?></td>
            <td><?=$usuario['tp'];?></td>
            <td><?=$usuario['Rua'];?></td>
            <td><?=$usuario['Nm'];?></td>
            <td><?=$usuario['Comple'];?></td>
            <td><?=$usuario['Bairr'];?></td>
            <td><?=$usuario['Cid'];?></td>
            <td><?=$usuario['Uf'];?></td>
            <td><?=$usuario['IBGE'];?></td>
            <td><?=$usuario['Tel_Fix'];?></td>
            <td><?=$usuario['Cel'];?></td>
            <td><?=$usuario['Email'];?></td>
            <td><?=$usuario['CPF'];?></td>
            <td><?=$usuario['RG'];?></td>
            <td><?=$usuario['Org_Emiss'];?></td>
            <td><?=$usuario['PIS'];?></td>
            <td><?=$usuario['Tit_Ele'];?></td>
            <td><?=$usuario['Zona'];?></td>
            <td><?=$usuario['Sec'];?></td>
            <td><?=$usuario['Serv_milit'];?></td>
            <td><?=$usuario['CNH'];?></td>
            <td><?=$usuario['Cat'];?></td>
            <td><?=$usuario['Dt_emiss'];?></td>
            <td><?=$usuario['Dt_ven'];?></td>
            <td><?=$usuario['CTPS'];?></td>
            <td><?=$usuario['Ser'];?></td>
            <td><?=$usuario['Dt_emiss_CNH'];?></td>
            <td><?=$usuario['RIC'];?></td>
            <td><?=$usuario['Inst_banc'];?></td>
            <td><?=$usuario['Banc'];?></td>
            <td><?=$usuario['Ag'];?></td>
            <td><?=$usuario['Nm_cont'];?></td>
            <td><?=$usuario['Tp_cont'];?></td>
            
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.html">Cadastrar Usuarios</a>
