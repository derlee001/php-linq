<?php
	namespace Linq;

	class Queryable extends Enumerator
	{
		public function Select( $callback )
		{
			if(is_callable($callback))
				throw new  Exception\IllegalTypeException('$callback must be a callable variable.');
				
				while($this->MoveNext())
				{
					yield $callback($this->GetCurrent());
				}
		}
	}
