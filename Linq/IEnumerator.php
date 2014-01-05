<?php
	namespace Linq;

	interface IEnumerator
	{     

		/**
		*  Advances the enumerator to the next element of the collection.
		*
		*  Returns:
		*      true if the enumerator was successfully advanced to the next element; false
		*      if the enumerator has passed the end of the collection.
		*/
		public function MoveNext();

		/**
		*    Sets the enumerator to its initial position, which is before the first element
		*    in the collection.
		*/
		public function Reset();
	}