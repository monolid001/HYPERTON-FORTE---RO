<?php
// Check that the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data from the form
    $customerId = $_POST['customerId'];
    $email = $_POST['email'];

    // Data to send to the API
    $data = array(
        'customerId' => $customerId,
        'email' => $email
    );

    // Convert data to JSON
    $payload = json_encode($data);

    // URL API
    $api_url = 'https://ec20bot.link/api/client/v1/customers';

    // Request settings
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/json',
            'content' => $payload
        )
    );

    // Create a stream context
    $context  = stream_context_create($options);

    // Send the request to the API
    $result = file_get_contents($api_url, false, $context);

    // Check the response status
    if ($result !== false) {
        // Get the HTTP response status
        $http_response_header = $http_response_header[0];
        preg_match('{\b\d{3}\b}', $http_response_header, $matches);
        $status = intval($matches[0]);

        // If the response status is 204, output a success message
        if ($status === 204) {
            echo "Форма успешно отправлена!";
        } else {
            echo "Произошла ошибка при отправке формы.";
        }
    } else {
        echo "Произошла ошибка при отправке запроса на API.";
    }

} else {
    echo "Доступ запрещен.";
}
?>
