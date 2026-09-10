<?php
function checkAuth($redirectUrl = null) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['admin_user'])) {
        if ($redirectUrl) {
            header('Location: ' . $redirectUrl);
            exit;
        }
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'No autorizado']);
        exit;
    }
    return $_SESSION['admin_user'];
}
