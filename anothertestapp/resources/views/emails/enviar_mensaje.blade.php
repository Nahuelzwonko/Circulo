<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Correo de contacto web </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            width: 100%;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .message-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .message-container strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="message-container">

    
    <h1>Correo de coctacto de {{ $data['name'] }}</h1>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Número:</strong> {{ $data['number'] }}</p>
    <p><strong>Asunto:</strong> {{ $data['subject'] }}</p>
    <p><strong>Mensaje:</strong> {{ $data['message'] }}</p>

    <p>Este mensaje fue enviado desde <a href="www.kinesilogosmza.com">www.kinesilogosmza.com/contacto</a> </p>
    <p>Cualquier informalidad comunicarse con los desarrolladores.</p>
    </div>
</body>
</html>
