<?php

class User {
	private $email;
	private $id;
	private $createdAt;	

	public function __construct(){
		$this->email = 'monsuper.client@mail.com';
		$this->id = '1';
		$this->createdAt='date';
	}

	public function getEmail (){
		return $this->email;
	}
	public function setEmail($mail){
		return $this->email = $mail;
	}
	public function getId(){
		return $this->id;
	}
	public function setId ($idName){
		return $this->id=$idName;
	}
	public function getCreatedAt(){
		return $this->createdAt;
	}
	public function setCreatedAt($time){
		return $this->createdAt=$time;
	}
}

?>