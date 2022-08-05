<?php
 // criar uma classe
 class pessoa
 {
    // atributos
    public $_nome;
    public $_cpf;
    public $_dtnasc;
    public $_rg;
    public $_sexo;
    public $_natu; // naturalidade
    public $_nasc; // nascionalidade
    public $_altura;
    public $_peso;
    // metodo 
    public function idade ($ano)
    {
        $x = $ano - $this->_dtnasc;
        return $x;
    }
 }
 

?>