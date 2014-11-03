<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aluno_model extends CI_Model{

	var $codigo;
	var $nome;
	var $login;
	var $senha;
	var $codigo_professor;

	public function search()
	{
		$where = array();

		if($this->codigo)
			$where['codigo'] = $this->codigo;
		if($this->nome)
			$where['nome'] = $this->nome;
		if($this->login)
			$where['login'] = $this->login;
		if($this->senha)
			$where['senha'] = $this->senha;
		if($this->codigo_professor)
			$where['codigo_professor'] = $this->codigo_professor;
		
		$query = $this->db->get_where('alunos', $where);
	
		return $query->result();
	}

	public function get()
	{
		$alunos = $this->search();
		if(count($alunos) > 0) 
			return $alunos[0]; 
		else 
			return null;
	}

	public function getAll()
	{
		$query = $this->db->get('alunos');
		return $query->result();
	}

	public function like($parametro_especifico)
	{
		$parametro = $parametro_especifico;

		$this->db->like('nome', $parametro);
		$this->db->or_like('login', $parametro);
		$this->db->or_like('senha', $parametro);
		$this->db->or_like('codigo', $parametro);
		
		$resultado = $this->db->get_where('alunos');
		
		return $resultado->result();
	}

	public function join($tabela)
	{
		switch ($tabela) {
			case 'usuarios':
				$this->load->model("usuario_model", "Usuario");
				$this->Usuario->codigo = $this->codigo_usuario;
				$this->Usuario->usuario =  $this->Usuario->get();
			break;
		}
	}
	
	public function insert()
	{
		$data = array(
			'nome'   			=> $this->nome,
			'login'  			=> $this->login,  
			'senha'  			=> $this->senha,
			'codigo_professor'	=> 1
		);

		$this->db->insert('alunos', $data);
	}

	public function update()
	{
		$update = array();

		if ($this->nome)
			$update['nome'] = $this->nome;
		if ($this->login)
			$update['login'] = $this->login;
		if ($this->senha)
			$update['senha'] = $this->senha;
		if($this->codigo_professor)
			$update['codigo_professor'] = $this->codigo_professor;
	
		$this->db->where('codigo', $this->codigo);
		$this->db->update('alunos', $update); 
	}

	public function delete()
	{
		$where = array();

		if ($this->codigo)
			$where['codigo'] = $this->codigo;
		if ($this->nome)
			$where['nome'] = $this->nome;
		if ($this->login)
			$where['login'] = $this->login;
		if ($this->senha)
			$where['senha'] = $this->senha;
		if($this->codigo_professor)
			$where['codigo_professor'] = $this->codigo_professor;

		$this->db->delete('alunos', $where); 
	}
	
}