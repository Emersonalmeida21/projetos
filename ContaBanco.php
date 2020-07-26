<?php

class ContaBanco {
 //Atributos
   public       $numConta;
   protected    $tipo;
   protected    $dono;
   private      $saldo;
   private      $status;
 //Métodos
   
   public function  abrirConta($tipo){
      $this->setTipo($tipo);
      $this->setStatus(true);
      if ($tipo == "Conta Corrente"){
          $this->setSaldo(50);
      }elseif ($tipo == "Conta Poupança"){
          $this->saldo = 150;
      }
   }
   public function  fecharConta(){
      if ($this->getSaldo() > 0){
          print"<p>Conta ainda tem dinheiro, não posso fecha-la!</p>";
      }elseif ($this->getSaldo() < 0) {
          print"<p>Conta está em débito impossivel encerrar</p>";  
        }else {
            $this->setStatus(false);
        }
   }
   public function  depositar($v){
       if ($this->getStatus()){
           $this->setSaldo($this->getSaldo()  + $v); 
          
       } else{
           print "<p>Conta fechada não consigo depositar</p>";
       }
   }
   public function sacar($v){
       if ($this->getStatus()) {
           if($this->getSaldo()> $v){
               // $this->saldo = $this->saldo - $v;
               $this->setSaldo($this->getSaldo()- $v);
               print"<p>Saque de $v autorizado na conta da " .$this->getDono(). "</p>";
           } else {
               print"<p>Saldo insuficiente para saque.</p>";
           }
       } else {
           print "<p>Não posso sacar de uma conta fechada</p>";
       }  
   }
   public  function pagarMensal($v){
      if ($this->getTipo() == "Conta Poupança"){
          $v = 12;
      } else if ($this->getTipo() == "Conta Poupança") {
          $v = 20;
      }
      if ($this->getStatus()){
          $this->setSaldo($this->getSaldo() - $v);
      }else {
          print"<p>Problemas com a conta. Não posso cobrar</p>";
      }
   }
   // Metodos Especiais
 public function __construct(){
     $this->setSaldo(0);
     $this->setStatus(false);
     print"<p>Conta criada com sucesso...</p>";
  }
  public function getnumConta(){
      return $this->numConta;
  }
  public  function setnumConta($numConta){
      $this->numConta = $numConta;
  }
  protected  function getTipo(){
      return $this->tipo;
  }
  protected function setTipo($tipo){
      $this->tipo = $tipo;
  }
  public function  getDono(){
      return $this->dono;
  }
  public function  setDono($dono){
      $this->dono = $dono;
  }
  private function getSaldo(){
      return $this->saldo;
  }
  private function setSaldo($saldo){
      $this->saldo = $saldo;
  }
  private function getStatus(){
      return $this->status;
  }
  private function setStatus($status){
      $this->status = $status;
  }
}
