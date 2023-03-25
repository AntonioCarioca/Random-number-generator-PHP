<?php

	class Dado{

		protected $quantidade;
		protected $lado;

		public function set_quantidade($quantidade){
			$this->quantidade = $quantidade;
		}

		public function get_quantidade(){
			return $this->quantidade;
		}

		public function set_lado($lado){
			$this->lado = $lado;
		}

		public function get_lado(){
			return $this->lado;
		}

	}

?>