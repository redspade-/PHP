<?php
	/**
	 *	Jellyfish_Types 
	 *
	 *	@package	Jellyfish
	 *	@author		Eric Bondoc <enrique.p.bondoc@gmail.com>
	 *	@since		15:35 PM Sunday, October 09, 2011
	 *	@abstract
	 *
	 *	This class contains mostly utility methods that wraps type-checking.
	 **/
	class Jellyfish_Types
		extends Jellyfish_Base {
		
		/**
		 *	@see	http://php.net/manual/en/function.empty.php ( since 15:45 PM Sunday, October 09, 2011 )
		 *	@const
		 *	@var	Integer
		 *
		 *	Constant representation of an empty integer.
		 */
		const EMPTY_INTEGER = 0;
		
		/**
		 *	@see	http://php.net/manual/en/function.empty.php ( since 15:45 PM Sunday, October 09, 2011 )
		 *	@const
		 *	@var	String
		 *
		 *	Constant representation of an empty string.
		 */
		const EMPTY_STRING_PLAIN = "";
		
		/**
		 *	@see	http://php.net/manual/en/function.empty.php ( since 15:45 PM Sunday, October 09, 2011 )
		 *	@const
		 *	@var	String
		 *
		 *	Constant representation of an empty string, with 0 character included.
		 */
		const EMPTY_STRING_ZERO_CAST = "0";
		
		/**
		 *	@see	http://php.net/manual/en/function.empty.php ( since 15:45 PM Sunday, October 09, 2011 )
		 *	@const
		 *	@var	Float
		 *
		 *	Constant representation of an empty float.
		 */
		const EMPTY_FLOAT = 0.0;
		
		/**
		 *	@see	http://php.net/manual/en/function.empty.php ( since 15:45 PM Sunday, October 09, 2011 )
		 *	@const
		 *	@var	Boolean
		 *
		 *	Constant representation of an empty boolean.
		 */
		const EMPTY_BOOLEAN = false;
		
		/**
		 *	isInteger
		 *
		 *	This member is used to check if the element/item is an integer.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is an integer.
		 *	@return bool	Returns true if the element provided is an integer; false otherwise.
		 *
		 */
		public static function isInteger( $element ) {
			
			if( self::EMPTY_INTEGER == $element ) {
				return true;
			}
			
			if( empty( $element ) ) {
				return false;
			}
			
			return is_int( $element );
			
		} // end static member isInteger
		
		/**
		 *	isString
		 *
		 *	This member is used to check if the element/item is a string.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is a string.
		 *	@return bool	Returns true if the element provided is a string; false otherwise.
		 *
		 */
		public static function isString( $element ) {
			
			if( self::EMPTY_BOOLEAN == $element ) {
				return true;
			}
			
			if( empty( $element ) ) {
				return false;
			}
			return is_string( $element );
			
		} // end static member isString
		
		/**
		 *	isBoolean
		 *
		 *	This member is used to check if the element/item is a boolean.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is a boolean.
		 *	@return bool	Returns true if the element provided is a boolean; false otherwise.
		 *
		 */
		public static function isBoolean( $element ) {
			
			if( self::EMPTY_BOOLEAN == $element ) {
				return true;
			}
			
			if( empty( $element ) ) {
				return false;
			}
			return is_bool( $element );
			
		} // end static member isBoolean
		
		/**
		 *	isFloat
		 *
		 *	This member is used to check if the element/item is a boolean.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is a float.
		 *	@return bool	Returns true if the element provided is a float; false otherwise.
		 *
		 */
		public static function isFloat( $element ) {
			
			if( self::EMPTY_FLOAT == $element ) {
				return true;
			}
			
			if( empty( $element ) ) {
				return false;
			}
			return is_float( $element );
			
		} // end static member isFloat
		
		/**
		 *	isArray
		 *
		 *	This member is used to check if the element/item is an array.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is an array.
		 *	@return bool	Returns true if the element provided is an array; false otherwise.
		 *
		 */
		public static function isArray( $element ) {
			
			if( array() == $element ) {
				return true;
			}
			
			if( empty( $element ) ) {
				return false;
			}		
			
			return is_array( $element );
			
		} // end static member isArray
		
		/**
		 *	isDirectory
		 *
		 *	This member is used to check if the element/item is a file.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is a directory.
		 *	@return bool	Returns true if the element provided is a directory; false otherwise.
		 *
		 */
		public static function isDirectory( $element ) {
						
			if( empty( $element ) ) {
				return false;
			}
			
			if( self::isString( $element ) ) {
				return is_dir( $element );
			}
			
			return false;
			
		} // end static member isDirectory
		
		/**
		 *	isSymbolicLink
		 *
		 *	This member is used to check if the element/item is a symbolic link.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is a symbolic link.
		 *	@return bool	Returns true if the element provided is a symbolic link; false otherwise.
		 *	@todo	Add support for Windows system where sym-links are appended with .lnk extensions.
		 *
		 */
		public static function isSymbolicLink( $element ) {
						
			if( empty( $element ) ) {
				return false;
			}
			
			if( self::isString( $element ) ) {
				return is_link( $element );
			}
			
			return false;
			
		} // end static member isSymbolicLink
		
		/**
		 *	isExecutable
		 *
		 *	This member is used to check if the element/item is an executable.
		 *
		 *	@static
		 *	@params	Mixed 	The element/item to be checked if it is an executable.
		 *	@return bool	Returns true if the element provided is an executable; false otherwise.
		 *
		 */
		public static function isExecutable( $element ) {
						
			if( empty( $element ) ) {
				return false;
			}
			
			if( self::isString( $element ) ) {
				return is_executable( $element );
			}
			
			return false;
			
		} // end static member isExecutable		
		
	} // end class Jellyfish_Types