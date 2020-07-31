<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "gladhesgone";
    $dbname = "dpto-database";

    $conn = mysqli_connect($servername, $username, $password);

    mysqli_set_charset($conn,"utf8");

    if(!$conn) {
        die("Falha na conexão: " . msqli_connect_error());
    }

    if (!mysqli_select_db($conn, $dbname)){
        echo "Não foi possível selecionar a base de dados \"$dbname\":" . mysqli_error($conn);
        exit;
    }
    

    $stmt = mysqli_stmt_init($conn);
    

    $stmt_success = mysqli_stmt_prepare($stmt, "INSERT INTO departament (dptoName) VALUES (?)");

    

    if ($stmt_success){
        mysqli_stmt_bind_param($stmt, "s", $depName);    

        $data = $_POST;
        $d = json_encode($data);
        $d = json_decode($d);
        $depName = $d->nameDep;
    
        echo ($depName); // só p mostrar no console        

        $stmt_success = mysqli_stmt_execute($stmt);
        
        if ($stmt_success) {
            header("index.php");
            
        } else {
            echo "Não foi possível executar a inserção de ".
                "$depName no banco de dados" . 
                mysqli_error($conn);
            exit;
        }
        mysqli_stmt_close($stmt);
    }
 
    mysqli_close($conn); 








?>