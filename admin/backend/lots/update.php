<?php

	session_start();

	header('Content-Type: application/json');

	if (!isset($_SESSION['auth_id'])) {
        echo json_encode([
        	'ok' => false,
        	'message' => "Acción no autorizada"
        ]);

        return false;
    }

    $id = $_GET['id'];

    if (isset($id) && !empty($id)) {

    	require '../connection.php';

    	$number = $_POST['number']; // número de Lote
    	$area = $_POST['area']; // área del terreno
    	$money_advance = $_POST['money_advance']; // enganche
    	$deadlines = $_POST['deadlines']; // plazos
    	$price_by_square_meter = $_POST['price_by_square_meter']; // precio por m2
    	$total_price = $_POST['total_price']; // precio total del terreno
    	$month_charge = $_POST['month_charge']; // mensualidades
    	$available = $_POST['available']; // disponibilidad
 		
		$sql = "UPDATE lots_table SET `number` = :number, `area` = :area, `money_advance` = :money_advance, `deadlines` = :deadlines, `price_by_square_meter` = :price_by_square_meter, `total_price` = :total_price, `month_charge` = :month_charge, `available` = :available WHERE `id` = :id";

		$query = $connection->prepare($sql);

		$query->bindParam(':number', $number);
		$query->bindParam(':area', $area);
		$query->bindParam(':money_advance', $money_advance);
		$query->bindParam(':deadlines', $deadlines);
		$query->bindParam(':price_by_square_meter', $price_by_square_meter);
		$query->bindParam(':total_price', $total_price);
		$query->bindParam(':month_charge', $month_charge);
		$query->bindParam(':available', $available);
		$query->bindParam(':id', $id);

		$updatedLot = $query->execute();

		if ($updatedLot) {
			echo json_encode([
				'ok' => true
			]);
		}
    	
    } else {
    	echo json_encode([
        	'ok' => false,
        	'message' => "URL invalida."
        ]);
    }