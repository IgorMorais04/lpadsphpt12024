<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpadsphpt12024\MODEL\Equipamento.php'; 
    include_once 'C:\xampp\htdocs\lpadsphpt12024\BLL\Equipamento.php'; 

    $equipamento = new \MODEL\Equipamento();

    $equipamento->setDescricao($_POST['txtDesc']);
    $equipamento->setResponsavel($_POST['txtResp']);
    $equipamento->setDepartamento($_POST['txtDep']);
    $equipamento->setCompra($_POST['txtCompra']);

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Insert($equipamento);  

    if ($result->errorCode() == '00000') {
        header("location: lstEquipamento.php");
      }
      else echo $result->errorInfo();
  

?>