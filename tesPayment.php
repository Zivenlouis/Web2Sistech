<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes</title>
</head>
<body>
    <?php
        require_once('vendor/autoload.php');
        \Midtrans\Config::$serverKey = 'SB-Mid-server-6WTpy6EWmxBj1NHehHlohJ3l';
        $transaction = new \Midtrans\Snap();
        $params = array(

        'transaction_details' => array(
            'order_id' => uniqid(),
            'gross_amount' => 100000 
        ),
        

        'customer_details' => array(
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '081234567890'
        ),

        'item_details' => array(
            array(
                'id' => 'ITEM01',
                'price' => 50000,
                'quantity' => 2,
                'name' => 'Example Item'
            )
        ),
        // 'enabled_payments' => array('credit_card', 'gopay')

    );

        

        $transaction_token = $transaction->createTransaction($params);
        header('Location: ' . $transaction_token->redirect_url);    


    ?>
</body>
</html>