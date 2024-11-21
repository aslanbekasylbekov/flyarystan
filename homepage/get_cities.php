<?php
// Establish a Database Connection
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registration";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

$sql = "SELECT DISTINCT departure_city FROM flights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["departure_city"] . "'>" . $row["departure_city"] . "</option>";
    }
}

echo "<optgroup label='---'></optgroup>";

$sql = "SELECT DISTINCT destination_city FROM flights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["destination_city"] . "'>" . $row["destination_city"] . "</option>";
    }
}
$sql = "SELECT DISTINCT departure_date FROM flights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["departure_date"] . "'>" . $row["departure_date"] . "</option>";
    }
}
$sql = "SELECT DISTINCT price FROM flights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["price"] . "'>" . $row["price"] . "</option>";
    }
}

$conn->close();

?>
