<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['file']) && isset($_POST['piecesCuivre']) && isset($_POST['piecesArgent']) && isset($_POST['piecesOr']) && isset($_POST['newItem'])) {
        $file = basename($_POST['file']);
        $filePath = 'C:\Users\nicol\Documents\MyGameName/' . $file;

        if (file_exists($filePath)) {
            $jsonContent = json_decode(file_get_contents($filePath), true);

            // Vérifie si la clé "equipements" existe dans le JSON
            if (!isset($jsonContent['inventaire'])) {
                $jsonContent['inventaire'] = array();
            }

            // Ajoute le nouvel article à la liste des équipements
            $newItem = $_POST['newItem'];
            $jsonContent['inventaire'][] = $newItem;

            // Déduire les pièces
            $jsonContent['piecesCuivre'] = (int)$_POST['piecesCuivre'];
            $jsonContent['piecesArgent'] = (int)$_POST['piecesArgent'];
            $jsonContent['piecesOr'] = (int)$_POST['piecesOr'];

            // Sauvegarde les modifications dans le fichier JSON
            file_put_contents($filePath, json_encode($jsonContent, JSON_PRETTY_PRINT));
            echo 'Données sauvegardées avec succès';
        } else {
            http_response_code(404);
            echo 'Fichier non trouvé';
        }
    } else {
        http_response_code(400);
        echo 'Données manquantes';
    }
} else {
    http_response_code(405);
    echo 'Méthode non autorisée';
}
?>





