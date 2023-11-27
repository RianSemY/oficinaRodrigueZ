<?php

require_once 'conexaoMysql.php';

class clientesModel{
    protected $id;
    protected $nome;
    protected $endereco;
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

    public function getEndereco() {
        return $this->endereco;
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

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
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
        
        $sql = 'SELECT * FROM cliente where email="'.$this->email.'" and senha="'.$this->senha.'";';
        $db->Executar($sql);
        
        $db->Desconectar();
        return $db->total;
    }
    public function takeId(){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = 'SELECT * FROM cliente where email="'.$this->email.'" and senha="'.$this->senha.'";';
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
        $sql = 'INSERT INTO cliente values (null, "'.$this->nome.'","'.$this->senha.'","'.$this->email.'","'.$this->fone.'","'.$this->endereco.'");';
        //Executar método de inserção
        $db->Executar($sql);


        $db->Desconectar();

        return $db->total;
    }
    
    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM cliente';

        $resultList = $db->Consultar($sql);
        
        $db->Desconectar();

        return $resultList;
    }
}