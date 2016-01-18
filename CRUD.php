<?php
	require_once "ConDB.php";
	class crud extends ConDB
	{
		private $query;
		
		private function prepExec($prep, $exec)
		{
			$this->query=$this->getCon()->prepare($prep);
			$this->query->execute($exec);
		}
		
		public function insert($table, $prep, $exec)
		{
			$this->prepExec('insert into '.$table.' set '.$prep.'', $exec);
		}
		
	}
?>