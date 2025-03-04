<?php
require_once __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = ($_POST["nome"]);
    $email = ($_POST["email"]);
    $mensagem = ($_POST["mensagem"]);

    $html = "
    <h1>Dados do Formulário</h1>
    <p><strong>Nome:</strong> $nome</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Mensagem:</strong> $mensagem</p>
    ";

    $mpdf = new Mpdf();
    $mpdf->WriteHTML($html);
    
    $arquivo = "formulario_$nome.pdf";

    $mpdf->Output($arquivo, "I");
}
?>
