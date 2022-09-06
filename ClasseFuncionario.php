<?php

class Funcionario extends Pessoa {

    public float $_salario;
    public string $_cargo;


    function ObterSalario() {

        
        echo "$this->_salario";


}



    function ImprimeDados()
    {
        
        echo "$this->_nome";
        echo "$this->_salario";
        echo "$this->_cargo";
    }

?>