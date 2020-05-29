<?php 
	if ( ! function_exists('asset')) {
    	function asset($asset_path) {
        	return base_url(). 'public/' . $asset_path;
    	}
	}
