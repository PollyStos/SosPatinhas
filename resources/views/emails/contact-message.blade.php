<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagem do site</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { padding: 20px; background-color: #f4f4f4; border-radius: 10px; }
        .title { font-size: 18px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <p class="title">Nova mensagem recebida:</p>
        <p><strong>Nome:</strong> {{ $data['name'] ?? 'Não informado' }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        @if(isset($data['subject']))
        <p><strong>Assunto:</strong> {{ $data['subject'] }}</p>
        @endif
        @if(isset($data['message']))
        <p><strong>Mensagem:</strong><br>{{ $data['message'] }}</p>
        @else
        <p><strong>Cadastro de e-mail:</strong> Usuário quer receber novidades ou atualizações.</p>
        @endif
    </div>
</body>
</html>
