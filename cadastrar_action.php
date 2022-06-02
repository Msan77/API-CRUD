<?php
require 'config.php';

$Situ = filter_input(INPUT_POST, 'Situ');
//$Situ = "Teste";
$Tp_pgto = filter_input(INPUT_POST, 'Tp_pgto');
$Depart = filter_input(INPUT_POST, 'Depart');
$Carg = filter_input(INPUT_POST, 'Carg');
$Jor_sema = filter_input(INPUT_POST, 'Jor_sema');
$pp_adiant = filter_input(INPUT_POST, 'pp_adiant');
$Sal = filter_input(INPUT_POST, 'Sal');
$Dt_Adm = filter_input(INPUT_POST, 'Dt_Adm');
$Tp_Adm = filter_input(INPUT_POST, 'Tp_Adm');
// $Foto = filter_input(INPUT_POST, 'Foto');
$Descri_fun = filter_input(INPUT_POST, 'Descri_fun');
$Nm_comple = filter_input(INPUT_POST, 'Nm_comple');
$Dt_nasc = filter_input(INPUT_POST, 'Dt_nasc');
$sex = filter_input(INPUT_POST, 'sex');
$Defi = filter_input(INPUT_POST, 'Defi');
$Est_civi = filter_input(INPUT_POST, 'Est_civi');
$Gr_instru = filter_input(INPUT_POST, 'Gr_instru');
$Nm_pai = filter_input(INPUT_POST, 'Nm_pai');
$Nm_mae = filter_input(INPUT_POST, 'Nm_mae');
$CEP = filter_input(INPUT_POST, 'CEP');
$tp = filter_input(INPUT_POST, 'tp');
$Rua = filter_input(INPUT_POST, 'Rua');
$Nm = filter_input(INPUT_POST, 'Nm');
$Comple = filter_input(INPUT_POST, 'Comple');
$Bairr = filter_input(INPUT_POST, 'Bairr');
$Cid = filter_input(INPUT_POST, 'Cid');
$Uf = filter_input(INPUT_POST, 'Uf');
$IBGE = filter_input(INPUT_POST, 'IBGE');
$Tel_Fix = filter_input(INPUT_POST, 'Tel_Fix');
$Cel = filter_input(INPUT_POST, 'Cel');
$Email = filter_input(INPUT_POST, 'Email');
$CPF = filter_input(INPUT_POST, 'CPF');
$RG = filter_input(INPUT_POST, 'RG');
$Org_Emiss = filter_input(INPUT_POST, 'Org_Emiss');
$PIS = filter_input(INPUT_POST, 'PIS');
$Tit_Ele = filter_input(INPUT_POST, 'Tit_Ele');
$Zona = filter_input(INPUT_POST, 'Zona');
$Sec = filter_input(INPUT_POST, 'Sec');
$Serv_milit = filter_input(INPUT_POST, 'Serv_milit');
$CNH = filter_input(INPUT_POST, 'CNH');
$Cat = filter_input(INPUT_POST, 'Cat');
$Dt_emiss = filter_input(INPUT_POST, 'Dt_emiss');
$Dt_ven = filter_input(INPUT_POST, 'Dt_ven');
$CTPS = filter_input(INPUT_POST, 'CTPS');
$Ser = filter_input(INPUT_POST, 'Ser');
$Dt_emiss_CNH = filter_input(INPUT_POST, 'Dt_emiss_CNH');
$RIC = filter_input(INPUT_POST, 'RIC');
$Inst_banc = filter_input(INPUT_POST, 'Inst_banc');
$Banc = filter_input(INPUT_POST, 'Banc');
$Ag = filter_input(INPUT_POST, 'Ag');
$Nm_cont = filter_input(INPUT_POST, 'Nm_cont');
$Tp_cont = filter_input(INPUT_POST, 'Tp_cont');

//print_r($Situ, $Tp_pgto, $Depart, $Carg, $Jor_sema, $pp_adiant, $Sal, $Dt_Adm, $Tp_Adm, $Descri_fun, $Nm_comple, $Dt_nasc, $sex, $Defi, $Est_civi, $Gr_instru, $Nm_pai, $Nm_mae, $CEP, 
//$tp, $Rua, $Nm, $Comple, $Bairr, $Cid, $Uf, $IBGE, $Tel_Fix, $Cel, $Email, $CPF, $RG, $Org_Emiss, $PIS, $Tit_Ele, $Zona, $Sec, $Serv_milit, $CNH, $Cat, $Dt_emiss, $Dt_ven, $CTPS, 
//$Ser, $Dt_emiss_CNH, $RIC, $Inst_banc, $Banc, $Ag, $Nm_cont, $Tp_cont);

if($CPF){ 
    $sql = $pdo->prepare("SELECT * FROM cadastros WHERE CPF = :CPF OR RG = :RG OR PIS = :PIS");
    $sql->bindValue(':CPF', $CPF);
    $sql->bindValue(':RG', $RG);
    $sql->bindValue(':PIS', $PIS);
    $sql->execute();
    
    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO cadastros (Situ, Tp_pgto, Depart, Carg, Jor_sema, pp_adiant, Sal, Dt_Adm, Tp_Adm, Descri_fun, Nm_comple, Dt_nasc, sex, Defi, Est_civi, Gr_instru, Nm_pai, Nm_mae, CEP,
        tp, Rua, Nm, Comple, Bairr, Cid, Uf, IBGE, Tel_Fix, Cel, Email, CPF, RG, Org_Emiss, PIS, Tit_Ele, Zona, Sec, Serv_milit, CNH, Cat, Dt_emiss, Dt_ven, CTPS, Ser, Dt_emiss_CNH, RIC, Inst_banc, Banc,
        Ag, Nm_cont, Tp_cont) 
        VALUES (:Situ, :Tp_pgto, :Depart, :Carg, :Jor_sema, :pp_adiant, :Sal, :Dt_Adm, :Tp_Adm, :Descri_fun, :Nm_comple, :Dt_nasc, :sex, :Defi, :Est_civi, :Gr_instru, :Nm_pai, :Nm_mae, :CEP, :tp, :Rua, :Nm,
        :Comple, :Bairr, :Cid, :Uf, :IBGE, :Tel_Fix, :Cel, :Email, :CPF, :RG, :Org_Emiss, :PIS, :Tit_Ele, :Zona, :Sec, :Serv_milit, :CNH, :Cat, :Dt_emiss, :Dt_ven, :CTPS, :Ser, :Dt_emiss_CNH, :RIC, :Inst_banc,
        :Banc, :Ag, :Nm_cont, :Tp_cont)");
        $sql->bindValue(':Situ', $Situ);
        $sql->bindValue(':Tp_pgto', $Tp_pgto);
        $sql->bindValue(':Depart', $Depart);
        $sql->bindValue(':Carg', $Carg);
        $sql->bindValue(':Jor_sema', $Jor_sema);
        $sql->bindValue(':pp_adiant', $pp_adiant);
        $sql->bindValue(':Sal', $Sal);
        $sql->bindValue(':Dt_Adm', $Dt_Adm);
        $sql->bindValue(':Tp_Adm', $Tp_Adm);
        $sql->bindValue(':Descri_fun', $Descri_fun);
        $sql->bindValue(':Nm_comple', $Nm_comple);
        $sql->bindValue(':Dt_nasc', $Dt_nasc);
        $sql->bindValue(':sex', $sex);
        $sql->bindValue(':Defi', $Defi);
        $sql->bindValue(':Est_civi', $Est_civi);
        $sql->bindValue(':Gr_instru', $Gr_instru);
        $sql->bindValue(':Nm_pai', $Nm_pai);
        $sql->bindValue(':Nm_mae', $Nm_mae);
        $sql->bindValue(':CEP', $CEP);
        $sql->bindValue(':tp', $tp);
        $sql->bindValue(':Rua', $Rua);
        $sql->bindValue(':Nm', $Nm);
        $sql->bindValue(':Comple', $Comple);
        $sql->bindValue(':Bairr', $Bairr);
        $sql->bindValue(':Cid', $Cid);
        $sql->bindValue(':Uf', $Uf);
        $sql->bindValue(':IBGE', $IBGE);
        $sql->bindValue(':Tel_Fix', $Tel_Fix);
        $sql->bindValue(':Cel', $Cel);
        $sql->bindValue(':Email', $Email);
        $sql->bindValue(':CPF', $CPF);
        $sql->bindValue(':RG', $RG);
        $sql->bindValue(':Org_Emiss', $Org_Emiss);
        $sql->bindValue(':PIS', $PIS);
        $sql->bindValue(':Tit_Ele', $Tit_Ele);
        $sql->bindValue(':Zona', $Zona);
        $sql->bindValue(':Sec', $Sec);
        $sql->bindValue(':Serv_milit', $Serv_milit);
        $sql->bindValue(':CNH', $CNH);
        $sql->bindValue(':Cat', $Cat);
        $sql->bindValue(':Dt_emiss', $Dt_emiss);
        $sql->bindValue(':Dt_ven', $Dt_ven);
        $sql->bindValue(':CTPS', $CTPS);
        $sql->bindValue(':Ser', $Ser);
        $sql->bindValue(':Dt_emiss_CNH', $Dt_emiss_CNH);
        $sql->bindValue(':RIC', $RIC);
        $sql->bindValue(':Inst_banc', $Inst_banc);
        $sql->bindValue(':Banc', $Banc);
        $sql->bindValue(':Ag', $Ag);
        $sql->bindValue(':Nm_cont', $Nm_cont);
        $sql->bindValue(':Tp_cont', $Tp_cont);

        $sql->execute();
        header("Location: index.php");
        exit;
    }

}

else{
    header("Location: cadastrar.html");
    exit;
}

?> 