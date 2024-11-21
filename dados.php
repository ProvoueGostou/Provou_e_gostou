<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeiro_nome = htmlspecialchars($_POST['primeiro_nome']);
    $ultimo_nome = htmlspecialchars($_POST['ultimo_nome']);
    $sala = htmlspecialchars($_POST['sala']);
    $curso = htmlspecialchars($_POST['curso']);
    $pedido = htmlspecialchars($_POST['pedido']);

    // Exemplo de mensagem de sucesso
    echo "Obrigado, $primeiro_nome $ultimo_nome! Sua encomenda foi registrada: $pedido.";
}
?>
