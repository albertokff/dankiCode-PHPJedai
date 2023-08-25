<?php
	
	class Cores {
		
		public function Azul() {
			echo "Função de cor Azul!";
			echo "<br />";
		}

		public function Vermelha() {
			echo "Função de cor Vermelha!";
			echo "<br />";
		}
	}


	class Veiculos extends Cores {
		
		public function Chevrolet() {
			echo "Essa marca é da Chevrolet";
			echo "<br />";
		}

		public function Volkswagen() {
			echo "Marca Volkswagen";
			echo "<br />";
		}

	}

	class Casas extends Cores {

		public function Apartamento() {
			echo "Esse apartamento é de frente para a praia";
			echo "<br />";
		}

		public function Casa() {
			echo "Essa casa está localizada no centro da cidade";
			echo "<br />";
		}

	}

	$empresa = new Veiculos();
	$empresa->Chevrolet();

	$empresa2 = new Veiculos();
	$empresa2->Volkswagen();	

	$carro = new Veiculos();
	$carro->Azul();

	$carro2 = new Veiculos();
	$carro2->Vermelha();	

	$morada1 = new Casas();
	$morada1->Vermelha();

?>