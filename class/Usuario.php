<?php 

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	// Inicio do GRT / SET
	//idusuario get / set
	public function getIdusuario(){
		return $this->idusuario;
	}
		public function SetIdusuario($value){
			$this->idusuario = $value;
		}
	//deslogin get / set
	public function getDeslogin(){
		return $this->deslogin;
	}
		public function SetDeslogin($value){
			$this->deslogin = $value;
		}	
	//dessenha get / set
	public function getDessenha(){
		return $this->dessenha;
	}
		public function SetDessenha($value){
			$this->dessenha = $value;
		}
	//Data Cadastro get / set
	public function getDtcadastro(){
		return $this->dtcadastro;
	}
		public function SetDtcadastro($value){
			$this->dtcadastro = $value;
		}
		//Final SET / GET

		//Inicio do loadById
		public function loadById($id){
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
					":ID" => $id
			));
			if (count($results[0]) > 0) {
				$row = $results[0];
				$this->SetIdusuario($row['idusuario']);
				$this->SetDeslogin($row['deslogin']);
				$this->SetDessenha($row['dessenha']);
				$this->SetDtcadastro(new datetime($row['dtcadastro']));
				
			}
		}
		//fINAL do loadById
		//Inicio de jsom
		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}


}

?>