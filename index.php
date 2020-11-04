<?php
	/**
	 * Programmer: WHY
	 * Date: 05/11/20
	 * Time: 01.03
	 */
	
	require_once __DIR__ . '/src/Forms.php';
	
	$f = new \Forms\Forms('bootstrap');
	
	echo $f->input_text('nama');