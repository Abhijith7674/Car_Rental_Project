<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental - Rent Confirmation</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function showConfirmation() {
            alert("Thank you for renting a car from us! Please visit our outlet with the necessary documents.");
        }
    </script>
</head>

<body>
    <section id="rent-confirmation">
        <div class="container">
            <h2>Rent Confirmation</h2>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $selectedCar = $_POST["car"];
                    $startDate = $_POST["start-date"];
                    $endDate = $_POST["end-date"];
                    $pricePerDay = $_POST["price"];
                    $totalPrice = $pricePerDay * (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
                    echo "Selected Car: " . $selectedCar . "<br>";
                    echo "Start Date: " . $startDate . "<br>";
                    echo "End Date: " . $endDate . "<br>";
                    echo "Total Price: ₹" . $totalPrice . "<br>";
                }
            ?>
            <button onclick="showConfirmation()" class="btn-confirm">Confirm</button>
        </div>
    </section>

</body>

</html>
