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
       
       
        $orderId = uniqid();
        $eventId = $eventData['id'];
        $userId = $userData['id'];
        $paymentStatus = "Pending";
        $query = "INSERT INTO tbl_events_registration (id, event_id, account_id, payment_status) VALUES ('$orderId', '$eventId', '$userId', '$paymentStatus')";
        if (!$conn -> query($query)) header('location: register_events.php?messageCode=1');
        \Midtrans\Config::$serverKey = 'SB-Mid-server-6WTpy6EWmxBj1NHehHlohJ3l';
        $transaction = new \Midtrans\Snap();
        $itemName = "Register to " . $eventData['event_title'];
        if (intval($eventData['price']) <= 0) header("location: payment_handler.php?order_id=$orderId&status_code=200&transaction_status=settlement");

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
    <div class="loader">
        <span class="loader__element"></span>
        <span class="loader__element"></span>
        <span class="loader__element"></span>
    </div>
</body>
</html>

<style>
    :root {
    --main-color: #ecf0f1;
    --point-color: #555;
    --size: 5px;
    }

    .loader {
        background-color: var(--main-color);
        overflow: hidden;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0; left: 0;
        display: flex;
        align-items: center;
        align-content: center; 
        justify-content: center;  
        z-index: 100000;
        animation: warnawarni 3s infinite alternate;
        
    }

    @keyframes warnawarni {
        0% {
            background-color: #6096B4;
        }

        33% {
            background-color: #93BFCF;
        }
        
        66% {
            background-color: #BDCDD6;
        }

        100% {
            background-color: #EEE9DA;
        }
    }

    .loader__element {
        border-radius: 100%;
        border: var(--size) solid var(--point-color);
        margin: calc(var(--size)*2);
    }

    .loader__element:nth-child(1) {
        animation: preloader .6s ease-in-out alternate infinite;
    }
    .loader__element:nth-child(2) {
        animation: preloader .6s ease-in-out alternate .2s infinite;
    }

    .loader__element:nth-child(3) {
        animation: preloader .6s ease-in-out alternate .4s infinite;
    }

    @keyframes preloader {
        100% { transform: scale(2); }
    }
</style>