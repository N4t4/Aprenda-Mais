<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professor_model extends CI_Model{

	var $codigo;
	var $nome;
	var $email;
	var $senha;

	public function search()
	{
		$where = array();

		if($this->codigo)
			$where['codigo'] = $this->codigo;
		if($this->nome)
			$where['nome'] = $this->nome;
		if($this->email)
			$where['email'] = $this->email;
		if($this->senha)
			$where['senha'] = $this->senha;
		
		$query = $this->db->get_where('professores', $where);
	
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
		$query = $this->db->get('professores');
		return $query->result();
	}

	public function like($parametro_especifico)
	{
		$parametro = $parametro_especifico;

		$this->db->like('nome', $parametro);
		$this->db->or_like('email', $parametro);
		$this->db->or_like('codigo', $parametro);
		
		$resultado = $this->db->get_where('professores');
		
		return $resultado->result();
	}

	public function join($tabela)
	{
		switch ($tabela) {
			case 'usuarios':
				
			break;
		}
	}

	public function insert()
	{
		$data = array(
			'nome'  => $this->nome,
			'email' => $this->email,  
			'senha' => $this->senha
		);

		$this->db->insert('professores', $data);
	}

	public function update()
	{
		$update = array();

		if ($this->nome)
			$update['nome'] = $this->nome;
		if ($this->email)
			$update['email'] = $this->email;
		if ($this->senha)
			$update['senha'] = $this->senha;
	
		$this->db->where('codigo', $this->codigo);
		$this->db->update('professores', $update); 
	}
	
	public function delete()
	{
		$where = array();

		if($this->codigo)
			$where['codigo'] = $this->codigo;
		if($this->nome)
			$where['nome'] = $this->nome;
		if($this->email)
			$where['email'] = $this->email;
		if($this->senha)
			$where['senha'] = $this->senha;

		$this->db->delete('professores', $where); 
	}
	
}