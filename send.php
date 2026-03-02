<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hello@proliftstudio.com"; // <-- Twój adres docelowy
    $subject = "Nowa wiadomość z formularza Domy-Pichal";
    $message = "Imię i nazwisko: " . htmlspecialchars($_POST["name"]) . "\n"
             . "E-mail: " . htmlspecialchars($_POST["email"]) . "\n"
             . "Telefon: " . htmlspecialchars($_POST["phone"]) . "\n"
             . "Opis inwestycji: " . htmlspecialchars($_POST["message"]);
    $headers = "From: " . filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thanks.html");
        exit();
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie.";
    }
}
?>