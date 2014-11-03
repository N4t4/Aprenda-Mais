<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disciplina_model extends CI_Model{

	var $codigo;
	var $nome;
	var $descricao;

	public function search()
	{
		$where = array();

		if($this->codigo)
			$where['codigo'] = $this->codigo;
		if($this->nome)
			$where['nome'] = $this->nome;
		if($this->descricao)
			$where['descricao'] = $this->descricao;
		
		$query = $this->db->get_where('disciplinas', $where);
	
		return $query->result();
	}

	public function get()
	{
		$resultado = $this->search();
		
		if(count($resultado) > 0) 
			return $resultado[0]; 
		else 
			return null;
	}

	public function getAll()
	{
		$query = $this->db->get('disciplinas');
		return $query->result();
	}

	public function like($parametro_especifico)
	{
		$parametro = $parametro_especifico;

		$this->db->like('nome', $parametro);
		$this->db->or_like('descricao', $parametro);
		$this->db->or_like('codigo', $parametro);
		
		$query = $this->db->get_where('disciplinas');
		
		return $query->result();
	}

	public function join($tabela)
	{
		$disciplina = $this->get();

		if (isset($tabela['aulas'])) {
			$this->load->model("Aula_Model", "Aulas");
			$this->Aulas->codigo_disciplina = $disciplina->codigo;
			$disciplina->aulas =  $this->Aulas->search();
		}

		return $disciplina;
	}

	public function alljoin($tabela)
	{
		$disciplinas = $this->search();

		for ($i=0; $i < count($disciplinas) ; $i++) { 
			if (isset($tabela['aulas'])) {
				$this->load->model("Aula_Model", "Aulas");
				$this->Aulas->codigo_disciplina = $disciplinas[$i]->codigo;
				$disciplinas[$i]->aulas =  $this->Aulas->search();
			}	
		}

		return $disciplinas;
	}
	
	public function insert()
	{
		$data = array(
			'nome'     => $this->nome,
			'descricao'=> $this->descricao
		);

		$this->db->insert('disciplinas', $data);
	}

	public function update()
	{
		$update = array();

		if ($this->nome)
			$update['nome'] = $this->nome;
		if ($this->descricao)
			$update['descricao'] = $this->descricao;
	
		$this->db->where('codigo', $this->codigo);
		$this->db->update('disciplinas', $update); 
	}

	public function delete()
	{
		$where = array();
		if ($this->codigo)
			$where['codigo'] = $this->codigo;
		if ($this->nome)
			$where['nome'] 	 = $this->nome;

		$this->db->delete('disciplinas', $where);
	}
	
}