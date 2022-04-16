<?php 

class galeriaController extends controller{

	public function index(){
		$dados = [
			'qt' => 129
		];
			$this->loadTemplate("galeria", $dados);
	}

}