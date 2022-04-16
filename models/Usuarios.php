<?php 

class Usuarios extends model{
	public function getNome($chave = 1){
		$sql = "SELECT nome FROM usuarios";
		$sql = $this->db->query($sql);

		
		if ($sql->rowCount() > 0) {
			$sql = $sql->fetchAll(PDO::FETCH_ASSOC);
			return $sql[$chave];
			
		}else{
			return "Não há usuários cadastrados";
		}
	}

	public function getIdade($chave = 1){
		$sql = "SELECT idade FROM usuarios";
		$sql = $this->db->query($sql);

		
		if ($sql->rowCount() > 0) {
			$sql = $sql->fetchAll(PDO::FETCH_ASSOC);
			return $sql[$chave];
			
		}else{
			return "Não há usuários cadastrados";
		}
	}
}