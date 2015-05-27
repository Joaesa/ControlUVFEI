<?php 

function prep_pdf($orientation = 'portrait'){
	$CI = & get_instance();

	$CI->cezpdf->selectFont(base_url().'/fonts');
	$all = $CI->cezpdf->openObject();
	$CI->cezpdf->saveState();
	$CI->cezpdf->setStrokeColor(0,0,0,1);
	if($orientation == 'portrait'){
		
	}
}
?>