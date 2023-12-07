<?php

require_once 'conexaoMysql.php';

class funcionariosModel{
    protected $id;
    protected $nome;
    protected $funcao;
    protected $fone;
    protected $email;
    protected $senha;
    
    public function __construct() {
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getFuncao() {
        return $this->funcao;
    }

    public function getFone() {
        return $this->fone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setFuncao($funcao): void {
        $this->funcao = $funcao;
    }

    public function setFone($fone): void {
        $this->fone = $fone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function verificarlogin(){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = 'SELECT * FROM funcionario where email="'.$this->email.'" and senha="'.$this->senha.'";';
        $db->Executar($sql);
        
        $db->Desconectar();
        return $db->total;
    }
    public function takeId(){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = 'SELECT * FROM funcionario where email="'.$this->email.'" and senha="'.$this->senha.'";';
        $result = $db->Consultar($sql);
        
        $db->Desconectar();
        return $result;
    }
    
    public function insert(){
        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'INSERT INTO funcionario values (null, "'.$this->nome.'","'.$this->email.'","'.$this->senha.'","'.$this->funcao.'","'.$this->fone.'");';
        //Executar método de inserção
        $db->Executar($sql);


        $db->Desconectar();

        return $db->total;
    }
    
    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM funcionario';
        $resultList = $db->Consultar($sql);
        $db->Desconectar();
        return $resultList;
    }
    public function delete() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM funcionario WHERE id=' . $this->id;
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }
}