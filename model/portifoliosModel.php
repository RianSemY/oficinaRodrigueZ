<?php
require_once 'conexaoMysql.php';
class portifoliosModel {

    protected $id;
    protected $nome;
    protected $imagem;


    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setimagem($imagem): void {
        $this->imagem = $imagem;
    }

    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM portifolios';

        $resultList = $db->Consultar($sql);
        
        $db->Desconectar();

        return $resultList;
    }

    public function insert() {
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = 'INSERT INTO portifolios (nome, imagem, descricao) values ("'.$this->nome.'","'.$this->imagem.'","'.$this->descricao.'");';
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

    public function update() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'UPDATE portifolios SET '
                . 'nome="'.$this->nome.'",'
                . 'descricao ="'.$this->descricao.'",'
                . 'imagem ="'.$this->imagem.'",'
                . 'WHERE id = '.$this->id;
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }
    
    public function delete() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM portifolios WHERE id='.$this->id;
      
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

}
