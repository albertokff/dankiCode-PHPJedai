<?php
	
	class Filha {
	
		// protected function funcaoTeste() {
		// 	echo 'chamando funcao teste';
		// }

		private function funcaoTeste() {
			echo 'chamando funcao teste';
		}

		public function mostrarOla() {
			$this->funcaoTeste();
			echo '<br />';
			echo 'Ola mundo';
		}
 
	}

	class Pai extends Filha{

		public function mostrarOla() {
			parent::mostrarOla(); //parent irá puxar as informações da classe Filha nesse caso
			echo '<br />';
			echo 'nova função!';
		}

		public function mostrarTchau() {
			echo 'Tchau Mundo!';
			echo '<br />';
			$this->funcaoTeste();
		}

	}

	// $pai = new Pai;
	// $pai->mostrarTchau();

	// $filha = new Filha;
	// $filha->mostrarOla();

	$pai = new Pai;
	$pai->mostrarOla();

	// $pai->mostrarTchau();

?>