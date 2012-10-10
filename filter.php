<?php 

/**
 * @author : Patrick Thibaudeau
 * @version $Id: version.php,v 1.0 2012/02/13
 * @package MathJax
 **/
function mathjax_filter($courseid,$text) {
	global $CFG;

        echo '<script type="text/javascript" src="'.$CFG->wwwroot.'/filter/mathjax/js/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>';
	return $text;	
}


?>