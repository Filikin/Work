<?

class dump {

/*
 * dump.class.php
 * a class for generating dumps from all types of variables
 *
 * Copyright (C) 2002 Daniel Jaenecke <jaenecke@gmx.li>
 *
 *     This program is free software; you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation; either version 2 of the License, or
 *     (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with this program; if not, write to the Free Software
 *     Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

/*
 * HOW TO USE
 * ==========
 *
 * You can assign the data you which to dump in two ways:
 *	a) when creating an object, e.g.
 *		$d = new dump ( $my_data )
 *
 *	b) by calling the method assign()
 *		$d = new dump;
 *		$d->assign( $my_data );
 *	
 * The method get_html() will return an HTML-table representing the
 * data which has been assigned before using one of the methods mentioned
 * above. After either a) or b) a command like
 *		echo $d->get_html ();
 * would output the table.
 *
 * CUSTOMIZING
 * ===========
 *
 * The output is formatted using HTML-inline-styles which are defined in the
 * properties style_key, style_value and style_type. By assigning different
 * values output may be changed easily to fit individual needs.
 *
 * REQUIREMENTS
 * ============
 *
 * This class needs PHP 4.0.2 or later to run; by removing the call to the 
 * function get_ressource_type () it can be used on PHP 4.0.0. Just follow 
 * the comment to do the change
 *
 * TODO
 * ====
 *
 * - method for generating raw output
 * - interface for customizing styles
 *
 */
 
/* PROPERTIES */
	/* data for dumping */
	var
		$data			= NULL;
		
	/* styles for HTML-Output */
	var
		$style_key		= NULL,
		$style_value	= NULL,
		$style_type		= NULL
	;

/* METHODS */
	/*
	 * public constructor dump ( [ mixed data ] )
	 * construcor; accepting data for dumping as parameter
	 */
	function dump ( $data = NULL) {
	
		/* assign data if available */
		if ( !is_null ( $data ) ) {
		
			$this->assign_data ( $data );
			
		}

		/* set up styles for HTML-output */
		$this->style_key 	= 'font-family: sans-serif; font-size: 11px; font-weight: bold; background-color: #f0f0f0;';
		$this->style_value	= 'font-family: monospace; font-size: 11px;';
		$this->style_type 	= 'font-family: sans-serif; font-size: 9px; font-style: italic; color: #000080;';
			
	} /* function dump */
	
	/*
	 * public string get_html ( [ mixed data ] )
	 * creates and returns an HTML-Table from this->data
	 */
	function get_html ( ) {

		if ( !isset ( $this->data ) ) {
		
			return false;
			
		}
		else {
		
			return $this->_make_HTML_table ( $this->data );
			
		}

	} /* function get_html */
	
	/*
	 * public void assign_data ( mixed data )
	 * assign data for later dump
	 */
	function assign_data ( $data ) {
	
		$this->data 	= $data;
	
	} /* function assign_data */
	 
	/*
	 * private string _make_HTML_table ( mixed data ) 
	 * 
	 */
	function _make_HTML_table ( $data ) {
	
		if ( !is_array ( $data ) ) {
		
			switch ( gettype ( $data ) ) {
			
				case 'string':
					
					return ( isset ( $data ) && !empty ( $data ) ) ? 
						htmlentities ( $data ) :
						'&nbsp;'
					;
					break; /* string */
					
				case 'boolean':
					
					return $data ? 'true' : 'false';
					
					break; /* boolean */
					
				case 'object':
				
					$object_data = array (

						'class'			=> get_class ( $data ),
						'parent_class'	=> get_parent_class ( $data ),
						'methods'		=> get_class_methods ( get_class ( $data ) ),
						'properties'	=> get_object_vars ( $data )						
					
					);
				
					return $this->_make_HTML_table ( $object_data );
					
					break; /* object */

				case 'resource':

					/*
					 * use the next line of code when 
					 * using PHP 4.0.0 or PHP 4.0.1
					 */
					// return $data;				

					/* 
					 * use the next line of code
					 * when using PHP 4.0.2 or better 
					 */
					return sprintf ( '%s (%s)', $data, get_resource_type ( $data ) );
					
					break; // resource
					
				default: 
					
					return $data;
					
					break; /* default */
					
			} /* switch gettype */
			
		} /* if !array data */
		
		$output = '<table border="1" cellpadding="0" cellspacing="0">';

		foreach ( $data as $key => $value ) {
			
			$type = substr ( gettype ( $data[ $key ] ), 0, 3 );
			
			$output .= sprintf ( 
				'<tr>
					<td style="%s">%s</td>
					<td style="%s">%s</td>
					<td style="%s">%s</td>
				</tr>',
				
				$this->style_key, $key,
				$this->style_type, $type,
				$this->style_value, $this->_make_HTML_table ( $value )

			);

		} /* foreach data */

		$output .= '</table>';
		
		return $output;
	
	} /* function _make_HTML_table */

} /* class dump */

?>