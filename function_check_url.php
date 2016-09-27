<?php
	function url_exists($url) {
	    $ch = @curl_init($url);
	    @curl_setopt($ch, CURLOPT_HEADER, TRUE);
	    @curl_setopt($ch, CURLOPT_NOBODY, TRUE);
	    @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
	    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	    $status = array();
	    preg_match('/HTTP\/.* ([0-9]+) .*/', @curl_exec($ch) , $status);
	    return ($status[1] == 200);
	}
?>