<?php 
	class Conexao {

		private $user = 'root';
		private $senha = '';
		private $nome_bd = 'festa';
		private $host = 'localhost';


		public function conectar() {
			
			try {
				$conexao = new PDO("mysql:host=$this->host;dbname=$this->nome_bd","$this->user","$this->senha");
				return $conexao;
			}
			catch(PDOException $e) {
				echo "<p> Erro:". $e->GetMessege() ."</p>";
			}

		}
	}
	
?>

<?php   

