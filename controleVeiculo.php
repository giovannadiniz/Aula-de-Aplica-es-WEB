<!--  ControleVeiculo.php -->
<?php
require_once 'ClassVeiculo.php';
require_once 'ClassVeiculoDAO.php';

if (isset($_POST['placa']) && isset($_POST['cpf_dono'])) {
    $placa = $_POST['placa'];
    $cpf_dono = $_POST['cpf_dono'];
    
    $novoVeiculo=new ClassVeiculo();
    $novoVeiculo->setPlaca($placa);
    $novoVeiculo->setCpfDono($cpf_dono);
  // fim do primeiro if

    $ClassVeiculoDAO=new ClassVeiculoDAO();

    if ($ClassVeiculoDAO->cadastrarVeiculo($novoVeiculo)){
        echo "Cadastrado com sucesso!";
    } 
    else{
        echo"Erro";
    }
}
  












?>

