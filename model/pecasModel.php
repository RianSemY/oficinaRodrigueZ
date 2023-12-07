<?php
require_once 'conexaoMysql.php';
class PecasModel{


    protected $id;
    protected $nome;
    protected $imagem;
    protected $desc;
    protected $tipo;
    protected $preco;
    protected $estoque;


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
    public function getDesc() {
        return $this->desc;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function getPreco() {
        return $this->preco;
    }
    public function getEstoque() {
        return $this->estoque;
    }
    
    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setImagem($imagem): void {
        $this->imagem = $imagem;
    }

    public function setDesc($desc): void {
        $this->desc = $desc;
    }
    public function setTipo($tipo):void{
        $this->tipo = $tipo;
    }
    public function setPreco($preco):void{
        $this->preco = $preco;
    }
    public function setEstoque($estoque):void{
        $this->estoque = $estoque;
    }

    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM peca';

        $resultList = $db->Consultar($sql);
        
        $db->Desconectar();

        return $resultList;
    }

    public function deleteFromEstoque(){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM peca WHERE estoque<1';
    }
    public function insert() {
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = 'INSERT INTO peca values (null, "'.$this->nome.'","'.$this->tipo.'","'.$this->preco.'","'.$this->estoque.'","'.$this->desc.'","'.$this->imagem.'");';
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

    public function update() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'UPDATE portifolios SET '
                . 'nome="'.$this->nome.'",'
                . 'tipo="'.$this->tipo.'",'
                . 'preco="'.$this->preco.'",'
                . 'descricao ="'.$this->desc.'",'
                . 'imagem ="'.$this->imagem.'",'
                . 'WHERE id = '.$this->id;
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }
    
    public function delete() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM peca WHERE id='.$this->id;
    
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

}