<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula_model extends CI_Model{

	var $codigo;
	var $titulo;
	var $conteudo;
	var $imagem;
	var $descricao;
	var $data;
	var $codigo_professor;
	var $codigo_disciplina;

	public function search()
	{
		$where = array();

		if($this->codigo)
			$where['codigo'] = $this->codigo;
		if($this->titulo)
			$where['titulo'] = $this->titulo;
		if($this->conteudo)
			$where['conteudo'] = $this->conteudo;
		if($this->descricao)
			$where['descricao'] = $this->descricao;
		if($this->data)
			$where['data'] = $this->data;
		if($this->codigo_professor)
			$where['codigo_professor'] = $this->codigo_professor;
		if($this->codigo_disciplina)
			$where['codigo_disciplina'] = $this->codigo_disciplina;
		
		$query = $this->db->get_where('aulas', $where);
	
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
		$query = $this->db->get('aulas');
		return $query->result();
	}

	public function like($parametro_especifico)
	{
		$parametro = $parametro_especifico;

		$this->db->like('nome', $parametro);
		$this->db->or_like('login', $parametro);
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
			'titulo' 			=> $this->titulo,
			'conteudo' 			=> $this->conteudo,
			'imagem' 			=> $this->imagem,
			'descricao' 		=> $this->descricao,
			'data' 				=> $this->data,
			'codigo_professor' 	=> $this->codigo_professor,
			'codigo_disciplina' => $this->codigo_disciplina
		);

		$this->db->insert('aulas', $data);
	}

	public function update()
	{
		$update = array();

		if($this->titulo)
			$update['titulo'] = $this->titulo;
		if($this->conteudo)
			$update['conteudo'] = $this->conteudo;
		if($this->descricao)
			$update['descricao'] = $this->descricao;
		if($this->data)
			$update['data'] = $this->data;
		if($this->codigo_professor)
			$update['codigo_professor'] = $this->codigo_professor;
		if($this->codigo_disciplina)
			$update['codigo_disciplina'] = $this->codigo_disciplina;
	
		$this->db->where('codigo', $this->codigo);
		$this->db->update('aulas', $update); 
	}

	public function delete()
	{
		$where = array();

		if($this->codigo)
			$where['codigo'] = $this->codigo;
		if($this->titulo)
			$where['titulo'] = $this->titulo;
		if($this->conteudo)
			$where['conteudo'] = $this->conteudo;
		if($this->descricao)
			$where['descricao'] = $this->descricao;
		if($this->data)
			$where['data'] = $this->data;
		if($this->codigo_professor)
			$where['codigo_professor'] = $this->codigo_professor;
		if($this->codigo_disciplina)
			$where['codigo_disciplina'] = $this->codigo_disciplina;

		$this->db->delete('aulas', $where); 
	}
	
}