<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AlunoModel extends CI_Model{

	var $codigo;
	var $nome;
	var $login;
	var $senha;
	var $codigo_professor;

	public function insert(){

		$dados = array(
			'codigo'=> $this->codigo, 
			'nome'  => $this->nome, 
			'login' => $this->login,
			'senha' => $this->senhavo,
			'codigo_professor' => $this->codigo_professor
		);

		$this->db->insert('publicacoes', $dados);
	}

	public function update(){
		
		$data = array(
			'nome'  => $this->nome, 
			'login' => $this->login,
			'senha' => $this->senhavo,
			'codigo_professor' => $this->codigo_professor 
		);

		$this->db->where('codigo', $this->codigo);
		$this->db->update('publicacoes', $data);
	}

	public function get(){
		
		$where = array();

		if($this->codigo)
			$where["codigo"] = $this->codigo;
		if($this->nome)
			$where["nome"]   = $this->nome;
		if($this->login)
			$where["login"]  = $this->login;
		if($this->senha)
			$where["senha"]  = $this->senha;
		if($this->codigo_professor)
			$where["senha"]  = $this->codigo_professor;
		
		$qry = $this->db->get_where('alunos', $where);
		return $qry->result()[0];
	}

	public function search(){
		
		$where = array();

		if($this->codigo)
			$where["codigo"] = $this->codigo;
		if($this->nome)
			$where["nome"]   = $this->nome;
		if($this->login)
			$where["login"]  = $this->login;
		if($this->senha)
			$where["senha"]  = $this->senha;
		if($this->codigo_professor)
			$where["codigo_professor"]  = $this->codigo_professor;
		
		$qry = $this->db->get_where('alunos', $where);
		return $qry->result();
	}

	public function join($arrayName = array('vazio' => , 0);){

		$aluno = $this->get();

		if(isset($tabela['professores'])){
			//$this->load->model("ProfessorModel", "professor");
			//$this->professor->codigo = $aluno->codigo_professor;
			//$professor = $this->professor->get();
			//$aluno->professor = $professor;
		}

		return $aluno;
	}

}