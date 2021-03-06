<?php
require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM cadastros WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }
    else{
        header("Location: index.php");
        exit;
    }
}
else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FISIA - Register Employee System</title>
      <link rel="icon" href="icone.jpg">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 30px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Human Resource Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                Cadastro
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                Consulta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login_1.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                Sair
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="" href="#info_gerais">Informa????es Gerais - </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#info_pess">Informa????es Pessoais - </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#End">Endere??o - </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Doc">Documenta????o</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <hr>
    <br>
    <form method="POST" action="editar_action.php" class="row g-3 needs-validation" novalidate style="margin-left: 10px;margin-right: 10px;">
      <legend><a name="info_gerais">Informa????es Gerais</a></legend>
      <input type="hidden" name="id" value="<?=$usuario['id']?>">
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Situa????o</span>
          <select name="Situ" class="form-select" id="validationCustom04" value="<?=$usuario['Situ']?>" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['Situ'] == 'Ligado')?'selected':''?> value="Ligado">Ligado</option>
            <option <?=($usuario['Situ'] == 'Desligado')?'selected':''?> value="Desligado">Desligado</option>

          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de Pagamento</span>
          <select  name ="Tp_pgto" class="form-select" id="validationCustom04" value="<?=$usuario['Tp_pgto']?>" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['Tp_pgto'] == 'Mensal')?'selected':''?> value="Mensal">Mensal</option>
            <option <?=($usuario['Tp_pgto'] == 'Semanal')?'selected':''?> value="Semanal">Semanal</option>
            <option <?=($usuario['Tp_pgto'] == 'Diario')?'selected':''?> value="Diario">Diario</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Departamento</span>
          <select name="Depart" class="form-select" id="validationCustom04" value="<?=$usuario['Depart']?>" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['Depart'] == 'Planejamento')?'selected':''?> value="Planejamento">Planejamento</option>
            <option <?=($usuario['Depart'] == 'Inventario')?'selected':''?> value="Inventario">Invent??rio</option>
            <option <?=($usuario['Depart'] == 'Financeiro')?'selected':''?> value="Financeiro">Financeiro</option>
            <option <?=($usuario['Depart'] == 'Recursos Humanos')?'selected':''?> value="Recursos Humanos">Recursos Humanos</option>
            <option <?=($usuario['Depart'] == 'Transporte')?'selected':''?> value="Transporte">Transporte</option>
            <option <?=($usuario['Depart'] == 'TI')?'selected':''?> value="TI">TI</option>
            <option <?=($usuario['Depart'] == 'Projetos')?'selected':''?> value="Projetos">Projetos</option>
          </select>
        </div>
      </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Cargo</span>
            <select name="Carg" class="form-select" id="validationCustom04" required>
              <option <?=($usuario['Carg'] == 'Gerente')?'selected':''?> value="Gerente">Gerente</option>
              <option <?=($usuario['Carg'] == 'Supervisor')?'selected':''?> value="Supervisor">Supervisor</option>
              <option <?=($usuario['Carg'] == 'Coordenador')?'selected':''?> value="Coordenador">Coordenador</option>
              <option <?=($usuario['Carg'] == 'Especialista')?'selected':''?> value="Especialista">Especialista</option>
              <option <?=($usuario['Carg'] == 'An??lista Sr')?'selected':''?> value="An??lista Sr">An??lista Sr</option>
              <option <?=($usuario['Carg'] == 'An??lista Pl')?'selected':''?> value="An??lista Pl">An??lista Pl</option>
              <option <?=($usuario['Carg'] == 'An??lista Jr')?'selected':''?> value="An??lista Jr">An??lista Jr</option>
              <option <?=($usuario['Carg'] == 'Assistente')?'selected':''?> value="Assistente">Assistente</option>
              <option <?=($usuario['Carg'] == 'Auxiliar')?'selected':''?> value="Auxiliar">Auxiliar</option>
              <option <?=($usuario['Carg'] == 'Estagiario')?'selected':''?> value="Estagiario">Estagiario</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Jornanda Semanal</span>
            <input value="<?=$usuario['Jor_sema']?>" name="Jor_sema" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;" value="<?=$usuario['Jor_sema']?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">% Adiantamento</span>
            <input value="<?=$usuario['pp_adiant']?>" name = "pp_adiant" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">S??lario</span>
          <input value="<?=$usuario['Sal']?>" name="Sal" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;" placeholder="R$">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data Admiss??o</span>
          <input value="<?=$usuario['Dt_Adm']?>" name="Dt_Adm" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de Admiss??o</span>
          <select name="Tp_Adm" class="form-select" id="validationCustom04" required>
            <option  disabled value="">Escolha...</option>  
            <option <?=($usuario['Tp_Adm'] == 'Admissao')?'selected':''?> value="Admissao">1 - Admiss??o</option>
            <option <?=($usuario['Tp_Adm'] == 'Transfer??ncia de Empresa do mesmo grupo econ??mico')?'selected':''?> value="Transfer??ncia de Empresa do mesmo grupo econ??mico">2 - Transfer??ncia de empresa do mesmo grupo econ??mico</option>
            <option <?=($usuario['Tp_Adm'] == 'Admiss??o por sucess??o, incorpora????o ou fus??o')?'selected':''?> value="Admiss??o por sucess??o, incorpora????o ou fus??o">3 - Admiss??o por sucess??o, incorpora????o ou fus??o</option>
            <option <?=($usuario['Tp_Adm'] == 'Trabalhador cedido')?'selected':''?> value="Trabalhador cedido">4 - Trabalhador cedido</option>
            <option <?=($usuario['Tp_Adm'] == 'Temporario')?'selected':''?> value="Temporario">5 - Temporario</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Descri????o da Fun????o</span>
          <textarea value="<?=$usuario['Descri_fun']?>" name="Descri_fun" type="" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </textarea>
        </div>
      </div>
      <legend><a name="info_pess">Informa????es Pessoais</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome Completo</span>
          <input value="<?=$usuario['Nm_comple']?>" name="Nm_comple" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Nascimento</span>
          <input value="<?=$usuario['Dt_nasc']?>" name="Dt_nasc" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Sexo</span>
          <select name="sex" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['sex'] == 'Masculino')?'selected':''?> value="Masculino">Masculino</option>
            <option <?=($usuario['sex'] == 'Feminino')?'selected':''?> value="Feminino">Feminino</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Deficiente</span>
          <select name="Defi" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['Defi'] == 'Nao')?'selected':''?> value="Nao">0 - N??o</option>            
            <option <?=($usuario['Defi'] == 'Fisica')?'selected':''?> value="Fisica">1 - F??sica</option>            
            <option <?=($usuario['Defi'] == 'Auditiva')?'selected':''?> value="Auditiva">2 - Auditiva</option>            
            <option <?=($usuario['Defi'] == 'Visual')?'selected':''?> value="Visual">3 - Visual</option>            
            <option <?=($usuario['Defi'] == 'Mental')?'selected':''?> value="Mental">4 - Mental</option>
            <option <?=($usuario['Defi'] == 'Multipla')?'selected':''?> value="Multipla">5 - Multipla</option>
            <option <?=($usuario['Defi'] == 'Reabilitado')?'selected':''?> value="Reabilitado">6 - Reabilitado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Estado Civil</span>
            <select name="Est_civi" class="form-select" id="validationCustom04" required>
              <option disabled value="">Escolha...</option>
              <option <?=($usuario['Est_civi'] == 'Casado')?'selected':''?> value="Casado">1 - Casado</option>
              <option <?=($usuario['Est_civi'] == 'Solteiro')?'selected':''?> value="Solteiro">2 - Solteiro</option>
              <option <?=($usuario['Est_civi'] == 'Divorciado')?'selected':''?> value="Divorciado">3 - Divorciado</option>
              <option <?=($usuario['Est_civi'] == 'Vi??vo')?'selected':''?> value="Vi??vo">4 - Vi??vo</option>
              <option <?=($usuario['Est_civi'] == 'Uni??o Est??vel')?'selected':''?> value="Solteiro">5 - Uni??o Est??vel</option>
              <option <?=($usuario['Est_civi'] == 'Outros')?'selected':''?> value="Solteiro">6 - Outros</option>
            </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend"> Grau de Instru????o</span>
          <select name="Gr_instru" class="form-select" id="validationCustom04" required>
          <option  disabled value="">Escolha...</option>
            <option <?=($usuario['Gr_instru'] == 'At?? a 4?? S??rie Incompleta')?'selected':''?> value="At?? a 4?? S??rie Incompleta">1 - At?? a 4?? S??rie Incompleta</option>
            <option <?=($usuario['Gr_instru'] == '4?? S??rie Completa')?'selected':''?> value="4?? S??rie Completa">2- 4?? S??rie Completa</option>
            <option <?=($usuario['Gr_instru'] == 'Da 5?? a 8?? S??rie Incompleta')?'selected':''?> value="Da 5?? a 8?? S??rie Incompleta">3 - Da 5?? a 8?? S??rie Incompleta</option>
            <option <?=($usuario['Gr_instru'] == 'Fundamental Completo')?'selected':''?> value="Fundamental Completo">4 - Fundamental Completo</option>
            <option <?=($usuario['Gr_instru'] == '1?? Grau Incompleto')?'selected':''?> value="1?? Grau Incompleto">5 - 1?? Grau Incompleto</option>
            <option <?=($usuario['Gr_instru'] == '1?? Grau Completo')?'selected':''?> value="1?? Grau Completo">6 - 1?? Grau Completo</option>
            <option <?=($usuario['Gr_instru'] == '2?? Grau Incompleto')?'selected':''?> value="2?? Grau Incompleto">7 - 2?? Grau Incompleto</option>
            <option <?=($usuario['Gr_instru'] == '2?? Grau Completo')?'selected':''?> value="2?? Grau Completo">8 - 2?? Grau Completo</option>
            <option <?=($usuario['Gr_instru'] == '3?? Grau Incompleto')?'selected':''?> value="3?? Grau Incompleto">9 - 3?? Grau Incompleto</option>
            <option <?=($usuario['Gr_instru'] == '3?? Grau Completo')?'selected':''?> value="3?? Grau Completo">10 - 3?? Grau Completo</option>
            <option <?=($usuario['Gr_instru'] == 'Superior Incompleto')?'selected':''?> value="Superior Incompleto">11 - Superior Incompleto</option>
            <option <?=($usuario['Gr_instru'] == 'Superior Completo')?'selected':''?> value="Superior Completo">12 - Superior Completo</option>
            <option <?=($usuario['Gr_instru'] == 'P??s Gradua????o')?'selected':''?> value="P??s Gradua????o">13 - P??s Gradua????o</option>
            <option <?=($usuario['Gr_instru'] == 'Mestrado')?'selected':''?> value="Mestrado">14 - Mestrado</option>
            <option <?=($usuario['Gr_instru'] == 'Doutorado')?'selected':''?> value="Doutorado">15 - Doutorado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome do Pai</span>
          <input value="<?=$usuario['Nm_pai']?>" name="Nm_pai" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome da M??e</span>
          <input value="<?=$usuario['Nm_mae']?>" name="Nm_mae" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <legend><a name ="End">Endere??o</a></legend>
      <div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">CEP</span>
            <input value="<?=$usuario['CEP']?>" type="text" class="form-control" name="CEP" id="cep" value="" size="10" aria-describedby="inputGroupPrepend" required style="width: 5px;" onblur="pesquisacep(this.value);">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo</span>
          <select name="tp" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['tp'] == 'Avenida')?'selected':''?> value="Avenida">Avenida</option>
            <option <?=($usuario['tp'] == 'Rua')?'selected':''?> value="Rua">Rua</option>
            <option <?=($usuario['tp'] == 'Rodovia')?'selected':''?> value="Rodovia">Rodovia</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Rua</span>
          <input value="<?=$usuario['Rua']?>" name="Rua" type="text" value="" size="60" id="rua" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
         <span class="input-group-text" id="inputGroupPrepend">N??mero</span>
          <input value="<?=$usuario['Nm']?>" name="Nm" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Complemento</span>
          <input value="<?=$usuario['Comple']?>" name="Comple" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Bairro</span>
          <input value="<?=$usuario['Bairr']?>" name="Bairr" type="text" value="" size="40" id="bairro" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Cidade</span>
          <input value="<?=$usuario['Cid']?>" name="Cid" type="text" value="" size="40" id="cidade" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Estado</span>
          <input value="<?=$usuario['Uf']?>"  name="Uf" type="text" value="" size="2" id="uf" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">IBGE:</span>
          <input value="<?=$usuario['IBGE']?>" name="IBGE" type="text" value="" size="8" id="ibge" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Telefone Fixo</span>
          <input value="<?=$usuario['Tel_Fix']?>" name="Tel_Fix" type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Celular</span>
          <input value="<?=$usuario['Cel']?>" name="Cel" type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Email</span>
          <input value="<?=$usuario['Email']?>" name="Email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <legend><a name="Doc">Documenta????o</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CPF</span>
          <input value="<?=$usuario['CPF']?>" name="CPF" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">RG</span>
          <input value="<?=$usuario['RG']?>" name="RG" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Org??o de Emiss??o</span>
          <input value="<?=$usuario['Org_Emiss']?>" name="Org_Emiss" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">PIS</span>
          <input value="<?=$usuario['PIS']?>" name="PIS" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Titulo  de Eleitor</span>
          <input value="<?=$usuario['Tit_Ele']?>" name="Tit_Ele" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Zona</span>
          <input value="<?=$usuario['Zona']?>" name="Zona" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Se????o</span>
          <input value="<?=$usuario['Sec']?>" name="Sec" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">C. Serv Militar</span>
        <input value="<?=$usuario['Serv_milit']?>" name="Serv_milit" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CNH</span>
          <input value="<?=$usuario['CNH']?>" name="CNH" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Categoria</span>
          <input value="<?=$usuario['Cat']?>" name="Cat" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Emiss??o</span>
          <input value="<?=$usuario['Dt_emiss']?>" name="Dt_emiss" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Vencimento</span>
          <input value="<?=$usuario['Dt_ven']?>" name="Dt_ven" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CTPS</span>
          <input value="<?=$usuario['CTPS']?>" name="CTPS" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">S??rie</span>
          <input value="<?=$usuario['Ser']?>" name="Ser" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Emiss??o</span>
          <input value="<?=$usuario['Dt_emiss_CNH']?>" name="Dt_emiss_CNH" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">RIC</span>
          <input value="<?=$usuario['RIC']?>" name="RIC" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Institui????o Bancaria</span>
          <select name="Inst_banc" class="form-select" id="validationCustom04" required>
            <option  disabled value="">Escolha...</option>
            <option <?=($usuario['Inst_banc'] == 'Itau Unibanco Banco Multiplo S.A')?'selected':''?> value="Itau Unibanco Banco Multiplo S.A.">Ita?? Unibanco Banco M??ltiplo S.A.</option>
            <option <?=($usuario['Inst_banc'] == 'Bradesco BBI S.A')?'selected':''?> value="Bradesco BBI S.A">Bradesco BBI S.A</option>
            <option <?=($usuario['Inst_banc'] == 'Santader S.A')?'selected':''?> value="Santader S.A">Santander S.A</option>
            <option <?=($usuario['Inst_banc'] == 'Banco do Brasil S.A')?'selected':''?> value="Banco do Brasil S.A">Banco do Brasil S.A</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Banco</span>
          <input value="<?=$usuario['Banc']?>" name="Banc" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Ag</span>
          <input value="<?=$usuario['Ag']?>" name="Ag" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">N??mero da conta</span>
          <input value="<?=$usuario['Nm_cont']?>" name="Nm_cont" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de conta</span>
          <select name="Tp_cont" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($usuario['Tp_cont'] == 'Conta Corrente')?'selected':''?> value="Conta Corrente">Conta-Corrente</option>
            <option <?=($usuario['Tp_cont'] == 'Conta Poupanca')?'selected':''?> value="Conta Poupanca">Conta-Poupan??a</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary btn-dark" type="submit" style="margin-bottom: 20px; margin-top: 20px;">Submit form</button>
        <button class="btn btn-primary btn-dark" type="reset" style="margin-bottom: 20px; margin-top: 20px;">Delete</button>
      </div>
    </form>
    <!--- <script src="main.js"></script> ---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>