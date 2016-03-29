<?php
	

	/**
	 * Render footer.php 
	 * @param  array  $data data to be passed to footer.php for rendering
	 * @return null
	 */
	function renderFooter($data = []){
		extract($data); 
		require("footer.php"); 
	}




	/**
	 * Render header.php and add a title to it 
	 * @param  array $data title
	 * @return        null
	 */
	function renderHeader($data = []){
		extract($data); 
		require("header.php"); 
	}
	
?>