<?php
require_once 'ConexaoMysql.php';
class carrosModel {

    protected $id;
    protected $modelo;
    protected $cor;
    protected $marca;
    protected $idcliente; //chave estrangeira
    protected $placa; //um objeto da raça do animal
    protected $ano;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function getAno() {
        return $this->ano;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }
    public function setAno($ano): void {
        $this->ano = $ano;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }

    public function idcliente($idcliente): void {
        $this->idcliente = $idcliente;
    }
    
    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa): void {
        $this->placa = $placa;
    }

    public function setIdcliente($idcliente): void {
        $this->idcliente = $idcliente;
    }

    
    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM carro';
        $resultList = $db->Consultar($sql);
        $db->Desconectar();
        return $resultList;
    }
    public function loadDono($idcliente){
        $db = new ConexaoMysql();
        $db->Conectar();
        require_once 'contasModel.php';
        
        $sql = 'SELECT nome from cliente where id='.$idcliente;
        $donosList = $db->Consultar($sql);
        $db->Desconectar();
        return $donosList;
    }

    public function loadById($id) {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM carro where id =' . $id;
        $resultList = $db->Consultar($sql);

        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->modelo = $value['modelo'];
                $this->cor = $value['cor'];
                $this->ano = $value['Ano'];
                $this->marca = $value['marca'];
                $this->placa = $value['placa'];
                $this->idcliente = $value['idcliente'];
                
                require_once './contasModel.php';
                $cliente = new clientesModel();
                $this->cliente = $cliente->loadById($this->idcliente);
            }
        }
        $db->Desconectar();
        return $resultList;
    }

    public function insert(){
        $db = new ConexaoMysql();
        $db->Conectar();
  
        $sql = 'INSERT INTO carro values(null, "'.$this->idcliente.'", "'.$this->placa.'","'.$this->modelo.'","'.$this->marca.'","'.$this->ano.'","'.$this->cor.'");';

        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

    public function update() {

        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'UPDATE placas SET '
                . 'modelo="' . $this->modelo . '",'
                . 'placa="' . $this->placa . '",'
                . 'marca ="' . $this->marca . '",'
                . 'cor ="' . $this->cor . '",'
                . 'ano ="' . $this->ano . '"'
                . 'WHERE id = ' . $this->id;
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

    public function delete() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM carros WHERE id=' . $this->id;
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

}
