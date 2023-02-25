<html>
<body>

<?php

echo "Hello world <br>";

$servername = "mysqldbspring.mysql.database.azure.com";
$username = "azureuser";
$password = "177900..00AA";
$dbname = "stock_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform SQL query
$sql = "SELECT * FROM produit_entree";
$result = $conn->query($sql);

// Print result
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 resultss";
}

$conn->close();
?>
</body>
</html>
<!-- docker build -t php .
	 docker run -d --name php -p 80:80 php

