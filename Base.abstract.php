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
		
		/**
		 *	getClass
		 *
		 *	@return	String	Returns the resolved class of the object being referenced.
		 **/
		public function getClass() {
			return get_class( $this );
		}
		
		/**
		 *	getClassName
		 *
		 *	@alias	getClass
		 *	@return	String	Returns the resolved class of the object being referenced.
		 *	@see	getClass
		 **/		 
		public function getClassName() {
			return $this->getClass();
		}
		
		/**
		 *	__toString
		 *
		 *	@alias	getClass
		 *	@return	String	Returns the resolved class of the object being referenced.
		 *	@see	getClass
		 **/
		public function __toString() {
			return $this->getClass();
		}
		
	} // end abstract class Jellyfish_Base