<?php

include '../../conexao/Conexao.php';

class clientesModel extends Conexao {

    private $idClient;
    private $name;
    private $last_name;
    private $address;
    private $number;
    private $district;
    private $city;
    private $cep;
    private $uf;
    private $cpf_cpnj;
    private $rg;
    private $ddd;
    private $telephone;
    private $phone;
    private $email;
    private $password;
    private $birthday;
    private $creationDate;
    private $lastUpdate;
    private $complement;

    ///GETTER AND SETTERS
    //idCliente
    function getIdClient(){
        return $this->idClient;
    }
    function setIdClient($idClient){
        $this->idClient = $idClient;
    }
    ////
    //name
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    ////
    //lastname
    function getLastName(){
        return $this->last_name;
    }
    function setLastName($last_name){
        $this->last_name = $last_name;
    }
    /////
    ///endereço do cliente
    function getAddress(){
        return $this->address;
    }
    function setAddress($address){
        $this->address = $address;
    }
    //////
    //number
    function getNumber(){
       return $this->number; 
    } 
    function setNumber($number){
        $this->number = $number;
    }
    //////
    //bairro 
    function getDistrict(){
        return $this->district;
    }
    function setDistrict($district){
        $this->district = $district;
    }
    //////
    //city
    function getCity(){
        return $this->city;
    }
    function setCity($city){
        $this->city = $city;
    }
    //////
    //cep
    function getCep(){
        return $this->cep;
    }
    function setCep($cep){
        $this->cep = $cep;
    }
    /////
    //estado
    function getUf(){
        return $this->uf;
    }
    function setUf(){
        $this->uf = $uf;
    }
    /////
    ///cpf_cpnj
    function getCpfCpnj(){
        return $this->cpf_cpnj;
    }
    function setCpfCnpj(){
        $this->cpf_cpnj = $cpf_cpnj;
    }
    /////
    //rg
    function getRg(){
        return $this->rg;
    }
    function setRg($rg){
        $this->rg = $rg;
    }
    /////
    //ddd
    function getDDD(){
        return $this->ddd;
    }
    function setDDD($ddd){
        $this->ddd = $ddd;
    }
    //////
    //telefone pessoal
    function getTelephone(){
        return $this->telephone;
    }
    function setTelephone($telephone){
        $this->telephone = $telephone;
    }
    /////
    //phone
    function getPhone(){
        return $this->phone;
    }
    function setPhone($phone){
        $this->phone = $phone;
    }
    //////
    //email
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    //////
    //password
    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password = $password;
    }
    ///////
    //data de nascimento
    function getBirthday(){
        return $this->birthday;
    }
    function setBirthday($birthday){
        $this->birthday = $birthday;
    }
    /////
    ///data de criação
    function getCreationDate (){
        return $this->creationDate;
    }
    function setCreationDate($creationDate){
        $this->creationDate = $creationDate;
    }
    /////]
    ///data de atualização masi recentes
    function getLastUpdate(){
        return $this->lastUpdate;
    }
    function setLastUpdate($lastUpdate){
        $this->lastUpdate = $lastUpdate;
    }
    //////
    /////complemento de endereço
    function getComplement (){
        return $this->complement;
    }
    function setComplement($complement){
        $this->complement = $complement;
    }
    /////////
    ///FIM DE GETTERS E SETTER

    //metodos
    public function create($obj){

        $sql = 'INSERT INTO clients (`name`, `last_name`, 
                                    `address`, `number`, 
                                    `district`, `city`, 
                                    `cep`, `uf`, `cpf_cnpj`,
                                    `rg`, `ddd`, `telephone`,
                                    `phone`, `email`,
                                    `password`, `birthday`,
                                    `creationDate`, `lastUpdate`,
                                    `complement`) VALUES (  :name, :last_name,
                                                            :address, :number,
                                                            :district, :city,
                                                            :cep, :uf, :cpf_cnpj,
                                                            :rg, :ddd, :telephone,
                                                            :phone, :email, :password,
                                                            :birthday, :creationDate, :lastUpdate,
                                                            :complement)';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('name', $obj->name);
        $consulta->bindValue('last_name', $obj->last_name);
        $consulta->bindValue('address', $obj->address);
        $consulta->bindValue('number', $obj->number);
        $consulta->bindValue('city', $obj->city);
        $consulta->bindValue('cep', $obj->cep);
        $consulta->bindValue('uf', $obj->uf);
        $consulta->bindValue('cpf_cnpj', $obj->cpf_cnpj);
        $consulta->bindValue('rg', $obj->rg);
        $consulta->bindValue('ddd', $obj->ddd);
        $consulta->bindValue('telephone', $obj->telephone);
        $consulta->bindValue('phone', $obj->phone);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('password', md5($obj->password));
        $consulta->bindValue('birthday', $obj->birthday);
        $consulta->bindValue('creationDate', $obj->creationDate);
        $consulta->bindValue('lastUpdate', $obj->lastUpdate);
        $consulta->bindValue('complement', $obj->complement);

        return $consulta->execute();
    }

    //READ ALL CLIENTS
    public function read(){
        
        $sql = 'SELECT * FROM clients';
        $consulta = Conexao::prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll();
    }








}

?>
