<?php
if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $filePath = 'C:\Users\nicol\Documents\MyGameName/' . $file;

    if (file_exists($filePath)) {
        $jsonContent = file_get_contents($filePath);
        header('Content-Type: application/json');
        echo $jsonContent;
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Fichier non trouvé']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Requête invalide']);
}
?>




