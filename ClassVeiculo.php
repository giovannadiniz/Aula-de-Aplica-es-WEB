<!-- ClassVeiculo.php -->
<?php
class ClassVeiculo {
    private $id;
    private $placa;
    private $cpf_dono;
    
    // Métodos Getters
    function getId() {
        return $this->id;
    }
    
    function getPlaca() {
        return $this->placa;
    }

    function getCpfDono() {
        return $this->cpf_dono;
    }

    // fim dos métodos getters
    

    // Métodos Setters
    function setId($id) {
        return $this->id = $id;
    }

    function setPlaca($placa) {
        return $this->placa = $placa;
    }
    
    function setCpfDono($cpf_dono) {
        return $this->cpf_dono = $cpf_dono;
    }

}
