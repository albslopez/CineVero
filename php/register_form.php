<?php 
if ($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: /");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=cinevero_db user=victor password=1991987")
    or die('Could not connect: ' . pg_last_error());
}



// Recibir datos POST normalmente (porque FormData no es JSON)
$name = $_POST['nome'] ?? null;
$surname = $_POST['cognome'] ?? null;
$username = $_POST['user'] ?? null;
$password = $_POST['password'] ?? null;
$email = $_POST['email'] ?? null;

if (!$username || !$password) {
    echo json_encode(["success" => false, "error" => "Faltan datos"]);
    exit;
}

if($dbconn){
    $q1 = "SELECT * FROM users WHERE username = $1";
    $result = pg_query_params($dbconn, $q1, array($username));
    if($tuple = pg_fetch_array($result, null, PGSQL_ASSOC)){
        echo json_encode(["success" => false, "username" => "Il nome utente è già registrato"]);
        exit;
    }
    $q2 = "SELECT * FROM users WHERE email = $1";
    $result = pg_query_params($dbconn, $q2, array($email));
    if($tuple = pg_fetch_array($result, null, PGSQL_ASSOC)){
        echo json_encode(["success" => false, "email" => "Il email è già registrato"]);
        exit;
    }
    $password_hash = password_hash($password);

    $q3 = "INSERT INTO users VALUES ($1, $2, $3, $4, $5, $6, $7)"
}

// Validación simple (reemplaza con base de datos si lo deseas)
$usuario_valido = "admin";
$clave_valida = "1234";

if ($username === $usuario_valido && $password === $clave_valida) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>