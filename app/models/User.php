<?php

class User {
	private $db;

	public function __construct() {
		$this->db = new Db;
	}

	public function register($data) {
		$this->db->qry('insert into user (name, email, password) values (:name, :email, :password)');
		$this->db->bnd(':name', $data['name']);
		$this->db->bnd(':email', $data['email']);
		$this->db->bnd(':password', $data['password']);
		if($this->db->exe()) {
			return True;
		} else {
			return False;
		}
	}	

	public function findUserByEmail($email) {
		$this->db->qry("select * from user WHERE email = :email");
		$this->db->bnd(':email', $email);
		$row = $this->db->singleRow();

		if($this->db->rowCnt() > 0) {
			return True;
		} else {
			return False;
		}
	}
}