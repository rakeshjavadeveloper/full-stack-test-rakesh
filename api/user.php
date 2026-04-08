<?php
require_once __DIR__ . '/../app/core/Database.php';
require_once __DIR__ . '/../app/controllers/UserController.php';

header("Content-Type: application/json");

$db = (new Database())->connect();
$controller = new UserController($db);

$action = $_GET['action'] ?? '';

$data = json_decode(file_get_contents("php://input"), true);

switch ($action) {

    case 'read':

        $draw = $_GET['draw'] ?? 1;
        $start = $_GET['start'] ?? 0;
        $length = $_GET['length'] ?? 5;
        $search = $_GET['search']['value'] ?? '';

        // total records
        $total = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();

        if (!empty($search)) {
            $stmt = $db->prepare("
                SELECT * FROM users 
                WHERE name LIKE :search OR email LIKE :search 
                LIMIT :start, :length
            ");
            $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        } else {
            $stmt = $db->prepare("SELECT * FROM users LIMIT :start, :length");
        }

        $stmt->bindValue(':start', (int)$start, PDO::PARAM_INT);
        $stmt->bindValue(':length', (int)$length, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // ✅ ALWAYS set filtered
        if (!empty($search)) {
            $countStmt = $db->prepare("
                SELECT COUNT(*) FROM users 
                WHERE name LIKE :search OR email LIKE :search
            ");
            $countStmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
            $countStmt->execute();
            $filtered = $countStmt->fetchColumn();
        } else {
            $filtered = $total; // 🔥 FIX
        }

        echo json_encode([
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $filtered,
            "data" => $data
        ]);

        break;

    case 'create':
        $user = $controller->store($data);
        echo json_encode(["user" => $user]);
        break;

    case 'update':
        $user = $controller->update($data);
        echo json_encode(["user" => $user]);
        break;

    case 'delete':
        $controller->delete($_GET['id']);
        echo json_encode(["status" => "deleted"]);
        break;
}