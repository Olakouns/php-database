<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dit";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    echo $nom.' '.$prenom.' '.$age.' '.$email;

    $sql = "INSERT INTO users (nom, prenom, age, email) VALUES ('".$nom."', '". $prenom ."', 12 ,'john@example.com')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>