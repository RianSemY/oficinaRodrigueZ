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
    public function loadById($id) {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM cliente where id =' . $id;
        $resultList = $db->Consultar($sql);
        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->endereco = $value['endereco'];
                $this->senha = $value['senha'];
                $this->fone = $value['fone'];
                $this->email = $value['email'];
            }
            
        }

        $db->Desconectar();

        return $resultList;
    }
    public function verificarRegistro(){
        $db = new ConexaoMysql();
        $db->Conectar();
        require_once './funcionariosModel.php';
        $sql = 'SELECT * FROM funcionario;';
        $funcionarios = $db->Consultar($sql);

        $sql = 'SELECT * FROM cliente;';
        $cliente = $db->Consultar($sql);

        $db->Desconectar();
    }
    public function insert(){
        $db = new ConexaoMysql();

        $db->Conectar();

        $sql = 'INSERT INTO cliente values (null, "'.$this->nome.'","'.$this->senha.'","'.$this->email.'","'.$this->fone.'","'.$this->endereco.'");';
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