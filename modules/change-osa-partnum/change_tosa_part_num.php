<?php 
include '../../inc/database.php';

// =========================================
// Funciones para cuando sean datos por GET
if (isset($_GET['action']) && $_GET['action'] !== '') {
	if (function_exists($_GET['action'])) {
		try {
			$_GET['action']();
		} catch (Exception $e) {
			echo '{"error":true,"desc":"Exception in: Get:[' . $_GET['action'] . '] with message: ' . $e->getMessage() . '"}';
		}
	} else {
		echo "Funcion No existe";
	}
}
// =========================================
// Funciones para cuando sean datos por POST
if (isset($_POST['action']) && $_POST['action'] !== '') {
	if (function_exists($_POST['action'])) {
		try {
			$_POST['action']();
		} catch (Exception $e) {
			echo '{"error":true,"desc":"Exception in: Post:[' . $_POST['action'] . '] with message: ' . $e->getMessage() . '"}';
		}
	} else {
		echo "Funcion No existe";
	}
}

$mxdb = new MxOptix();

