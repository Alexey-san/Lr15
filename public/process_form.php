<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Збираємо дані з форми
    $data = "";
    foreach ($_POST as $key => $value) {
        $data .= sprintf("%s: %s\n", htmlspecialchars($key), htmlspecialchars($value));
    }

    // Записуємо дані до файлу з додаванням
    file_put_contents("test.txt", $data, FILE_APPEND | LOCK_EX);

    // Підтвердження успішного запису
    echo "Дані успішно додані до text.txt!";
}
?>