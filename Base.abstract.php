<?php
	/**
	 *	Jellyfish_Base
	 *
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