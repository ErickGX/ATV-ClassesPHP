<?php



class Pessoa {

    public  string $_nome;
    public string $_endereco;
    public int $_idade;



    function ImprimeDados() {

        echo "$this->_nome";
        echo "$this->_endereco";
        echo "$this->_idade";
       
    }


}











?>