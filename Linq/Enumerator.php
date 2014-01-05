<?php
	namespace Linq;

	class Enumerator implements IEnumerator
	{
		private $_cursor = -1;
		private $_collection =  array();

		/**
		* Move To Next
		* @returns boolean
		*/
		public function MoveNext()
		{
             
			$result = false;

			if ($this->_cursor < (count($this->_keys) - 1)) {
				$result = true;

				$this->_currentKey = $this->_keys[$this->_cursor];
				$this->_currentValue = $this->_hash[$this->_currentKey];
				$this->_cursor++;

			}
			
			return $result;

		}

		public function Reset()
		{

		}
}