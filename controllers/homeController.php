<?php 


class homeController extends controller{

	public function index(){

		$anuncios = new Anuncios();
		$usuarios = new Usuarios();

		$dados = [
			'nome' => $usuarios->getNome(),
			'qt' => $anuncios->getQuantidade(),
			'idade' => $usuarios->getIdade()
		];


		$this->loadTemplate('home', $dados);
	}
}