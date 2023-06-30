<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <?php
        require_once('vendor/autoload.php');
        require("../Admin/php/CRUDevents.php");
        require("Php/connection.php");
        $eventData = getEventsFromId($_POST['eventId']);
        $userId = $_POST['userId'];
        $query = "SELECT * FROM tbl_akun WHERE id='$userId'";
        $result = $conn -> query($query);
        $userData = $result -> fetch_assoc();
       
        //Ganti
        if (intval($eventData['price']) <= 0) header('location: hm');

        $orderId = uniqid();
        $eventId = $eventData['id'];
        $userId = $userData['id'];
        $paymentStatus = "Pending";
        $query = "INSERT INTO tbl_events_registration (id, event_id, account_id, payment_status) VALUES ('$orderId', '$eventId', '$userId', '$paymentStatus')";
        if (!$conn -> query($query)) header('location: registerEvents.php?messageCode=1');
        \Midtrans\Config::$serverKey = 'SB-Mid-server-6WTpy6EWmxBj1NHehHlohJ3l';
        $transaction = new \Midtrans\Snap();
        $itemName = "Register to " . $eventData['event_title'];
        $params = array(

        'transaction_details' => array(
            'order_id' => $orderId,
            'gross_amount' => $eventData['price'] 
        ),
        

        'customer_details' => array(
            'first_name' => $userData['first_name'],
            'last_name' => $userData['last_name'],
            'email' => $userData['email'],
            'phone' => '082374675582'
        ),

        'item_details' => array(
            array(
                'id' => $eventData['id'],
                'price' => $eventData['price'],
                'quantity' => 1,
                'name' => $itemName
            )
        ),
        'enabled_payments' => array('bca_va', 'bri_va'),
    );

    try {
        $transaction_token = $transaction->createTransaction($params);
        header('Location: ' . $transaction_token->redirect_url);    
    } catch (Exception $e) {
        echo 'Error occurred: ' . $e->getMessage();
    }
        
       


    ?>
</body>
</html>