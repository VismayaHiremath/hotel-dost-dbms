<?php
include 'db_connect.php';

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect guest details
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $idType = $_POST['idType'] ?? '';

    // Collect reservation details
    $checkIn = $_POST['checkIn'] ?? '';
    $checkOut = $_POST['checkOut'] ?? '';
    $adults = $_POST['adults'] ?? 1;
    $children = $_POST['children'] ?? 0;
    $roomType = $_POST['roomType'] ?? '';
    $viewType = $_POST['viewType'] ?? '';
    $specialRequests = $_POST['specialRequests'] ?? '';
    $roomId = $_POST['roomId'] ?? null;

    // Collect payment details
    $paymentMethod = $_POST['paymentMethod'] ?? 'cash';
    $amount = $_POST['amount'] ?? 0;
    $transactionId = $_POST['transactionId'] ?? null;
    $invoiceNumber = $_POST['invoiceNumber'] ?? null;

    try {
        // Insert into Guests table
        $stmt = $pdo->prepare("INSERT INTO Guests (first_name, last_name, email, phone, address, ID_type) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $email, $phone, $address, $idType]);
        $guestId = $pdo->lastInsertId(); // Get inserted guest_id

        // Insert into Reservations table
        $stmt = $pdo->prepare("INSERT INTO Reservations (guest_id, check_in_date, check_out_date, special_requests, booking_source) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$guestId, $checkIn, $checkOut, $specialRequests, 'Website']);
        $reservationId = $pdo->lastInsertId(); // Get inserted reservation_id

        // Insert into ReservationRooms table
        if (!empty($roomId)) {
            $stmt = $pdo->prepare("INSERT INTO ReservationRooms (reservation_id, room_id) VALUES (?, ?)");
            $stmt->execute([$reservationId, $roomId]);
        }

        // Insert into Payments table
        $stmt = $pdo->prepare("INSERT INTO Payments (reservation_id, amount, payment_method, transaction_id, invoice_number) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$reservationId, $amount, $paymentMethod, $transactionId, $invoiceNumber]);

        echo " Booking and Payment successfully submitted!";
    } catch (PDOException $e) {
        echo " Database Error: " . $e->getMessage();
    }
} else {
    echo " Invalid request method.";
}
?>
