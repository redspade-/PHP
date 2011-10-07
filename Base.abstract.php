<?php
	/**
	 *	Jellyfish_Base
	 *
	 *	@package	Jellyfish
	 *	@author		Eric Bondoc <enrique.p.bondoc@gmail.com>
	 *	@since		07-Oct-2011 06:53 PM
	 *	@abstract
	 *
	 *	This serves as the base class for all supporting/extending subclasses following the Jellyfish architecture.
	 **/
	abstract class Jellyfish_Base {
		
		public function getClass() {
			return get_class( $this );
		}
		
		public function getClassName() {
			return $this->getClass();
		}
		
		public function __toString() {
			return $this->getClass();
		}
		
	} // end abstract class Jellyfish_Base