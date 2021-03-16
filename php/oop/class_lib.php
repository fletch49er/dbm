<?php
/*
 *******************************************************************************
 * File		: class_lib.php
 * Purpose	: php object library
 *						
 * Author	: Mark Fletcher
 * Date		: 06.04.2019
 *  
 * Notes	: 
 *
 * Revision	:
 *		18.04.2018	1st issue.
 *
 *******************************************************************************
*/
class person {
	var $name;
    var $forename;
   	var $surname;
    
    function __construct($persons_name) {
    	list($this->forename, $this->surname) = explode(' ', $persons_name);
    }
    
    function get_forename() {
    	return $this->forename;
    }
    function get_surname() {
    	return $this->surname;
    }
}
?>
