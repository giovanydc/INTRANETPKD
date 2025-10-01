<?php
// login.php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        header('Location: index.html?error=Rellena+usuario+y+contraseña');
        exit;
    }

    $stmt = $pdo->prepare('SELECT id, username, password, role FROM users WHERE username = ? LIMIT 1');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id(true);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    // Redirección según rol
    if ($user['role'] === 'admin') {
        header('Location: inicio.php');
    } elseif ($user['role'] === 'user') {
        header('Location: iniciopkd.php');
    } else {
        header('Location: inicio.php'); // fallback
    }
    exit;
} else {
    // Credenciales incorrectas → redirige con error
    $error = urlencode("Usuario o contraseña incorrectos");
    header("Location: index.php?error=$error");
    exit;
}

} else {
    header('Location: index.html');
    exit;
}
