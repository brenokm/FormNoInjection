-Login em PHP com Proteção contra SQL Injection:

Aplicação web de autenticação desenvolvida em PHP, demonstrando tanto uma implementação vulnerável quanto a versão corrigida com boas práticas de segurança.

-Descrição:

O projeto consiste em um sistema de login simples onde o usuário informa um nome de usuário e senha.
O sistema valida os dados e exibe mensagens de erro utilizando sessões, além de apresentar um alerta visual caso a tentativa falhe.

O projeto demonstra, na prática, a diferença entre:
->uma implementação vulnerável a ataques
->uma implementação segura 

-Tecnologias Utilizadas:

->PHP.
->MySQL. 
->HTML5. 
->CSS.
->JavaScript.

-Funcionalidades:

->Formulário de login com envio via POST.
->Validação de usuário e senha.
->Exibição de mensagens com $_SESSIO.

⚠️ Versão Vulnerável:
$sql = "SELECT * FROM usuarios WHERE username = $user AND passwrd = '$pass'";

Problemas:
->Concatenação direta de variáveis na query.
->Possibilidade de manipulação da consulta.
->Suscetível a SQL Injection.


🛡️ Versão Segura (Implementada):
$comando = $ligacao->prepare(
    "SELECT * FROM usuarios WHERE username = :user AND passwrd = :pass"
);
$comando->execute([
    ':user' => $_POST['text_username'],
    ':pass' => $_POST['text_pass']
]);

Vantagens:
->Separação entre código SQL e dados.
->Proteção contra injeção de código.
->Maior segurança na aplicação.

-Melhorias Futuras:

->Hash de senha (password_hash / password_verify).
->Validação de inputs no frontend.
->Sistema de cadastro.


📎 Observações:
->Para alternar entre a versão protegida e despotegida, reescreva o valor do atributo dentro da tag form no index.pxp.
<form class="container card" action="sub2.php" method="post">
OU
<form class="container card" action="sub.php" method="post">
->Projeto com foco educacional para entender fundamentos de backend com PHP e conceitos essenciais de segurança em aplicações web.
