<?php
// Praticando lógicas condicionais no PHP
// Exemplo de if e else 
// Exercício: Crie um sistema de login simples que verifique se o usuário está logado ou não.
// Se o usuário estiver logado, exiba uma mensagem de boas-vindas. Caso contrário, exiba uma mensagem de erro.
// Dados de login corretos
$usuarioCorreto = "Leonardo";
$senhaCorreta = "12345";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o formulário foi enviado
    $username = $_POST['username'] ?? ''; // Corrigido o nome do campo
    $password = $_POST['password'] ?? ''; // Corrigido o nome do campo
    
    // Verifica se o usuário e a senha estão corretos
    if ($username === $usuarioCorreto && $password === $senhaCorreta) { // Corrigido os nomes das variáveis
        echo $mensagem = "Bem-vindo, $username!";
    } else {
        $mensagem = "Não é o Leonardo!";
    }

      // Redireciona de volta ao HTML com a mensagem
    header("Location: index.html?mensagem=" . urlencode($mensagem));
    exit();    
} else {
    // Se o formulário não foi enviado, redireciona para a página de login
    header("Location: index.html");
    exit();
}
  
?>


