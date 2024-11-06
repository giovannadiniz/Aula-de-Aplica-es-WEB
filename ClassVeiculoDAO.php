<!--  ClassVeiculoDAO.php  -->
<?php
require_once 'Conexao.php';

class ClassVeiculoDAO {
    public function cadastrarVeiculo($novoVeiculo) {
        try {
            $pdo = Conexao::getInstance(); // Instancia o objeto a partir da classe conexão
            $sql="Insert into veiculos (placa,cpf_dono) 
            values (?,?)";
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(1,$novoVeiculo->getPlaca());
            $stmt->bindValue(2,$novoVeiculo->getCpfDono());
            $stmt->execute();   

    


            
            echo "<center><h1>Cadastro realizado com sucesso!</h1></center><br>";
            echo '<a href="listar.php">Listar</a>';
            return true;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return false;
        }
    }
}
?>
