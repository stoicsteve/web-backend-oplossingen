<?php

	class lion extends Animal
	{
		protected $lSpecies;

		public function __construct(  $name, $gender, $health, $species )
		{
			parent::__construct( $name, $gender, $health );
			
			$this->lSpecies = $lSpecies;
		}

		public function getSpecies()
		{
			return $this->lSpecies;
		}
		
		public function doSpecialMove()
		{
			return 'roar';
		}
	}

?>