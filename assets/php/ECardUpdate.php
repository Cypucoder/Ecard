<?php
    $user_name = "root";
    $password = "c0nnect";
    $database = "Ecard";
    $server = "serverIP";

    $fName=$_POST['fName'];
    $MI=$_POST['MI'];
    $lName=$_POST['lName'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $City=$_POST['City'];
    $State=$_POST['State'];
    $Zip=$_POST['Zip'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $City=$_POST['City'];
    $Assigned=$_POST['Assigned'];
    $District=$_POST['District'];

    $conn = new mysqli($server, $user_name, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = $conn->prepare("UPDATE t_Application (v_FirstName, v_MI, v_LastName, v_DOB, v_Address, v_City, v_State, v_Zip, v_Email, v_Phone, v_City, v_City, v_City) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("sssssssssssss", $fName, $MI, $lName, $DOB, $Address, $City, $State, $Zip, $Email, $Phone, $City, $Assigned, $District);
    $sql->execute();

    if ($sql->execute()) {
       echo "Your form has been sent. Please check with reference.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    
?>