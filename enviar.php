<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['data']) && isset($_POST['horario'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $data = $_POST['data'];
  $horario = $_POST['horario'];
  $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';

  // Envie um e-mail com os dados da consulta para o endereço de e-mail da Dra. Debóra Araújo
  $para = 'contato@dra-debora-araujo.com.br';
  $assunto = 'Agendamento de consulta';
  $mensagem = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nData: $data\nHorário: $horario\nMensagem: $mensagem";
  $cabecalho = "From: $email\r\nReply-To: $email\r\n";
  mail($para, $assunto, $mensagem, $cabecalho);

  // Envie uma mensagem de agradecimento ao usuário
  echo "Obrigado por agendar sua consulta! Entraremos em contato em breve.";
} else {
  echo "Erro: Todos os campos do formulário são obrigatórios.";
}
?>
