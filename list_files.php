<?php
$directory = 'C:\Users\nicol\Documents\MyGameName/';
$jsonFiles = glob($directory . '*.json');

echo '<select id="jsonFiles">';
echo '<option value="">Sélectionnez un fichier JSON</option>';
foreach ($jsonFiles as $file) {
    $fileName = basename($file);
    echo "<option value=\"$fileName\">$fileName</option>";
}
echo '</select>';
?>


