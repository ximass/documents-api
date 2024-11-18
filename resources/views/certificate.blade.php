<!-- resources/views/certificate.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Participação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .certificate {
            border: 10px solid #ddd;
            padding: 50px;
        }
        h1 {
            font-size: 50px;
        }
        p {
            font-size: 18px;
        }
        .bold {
            font-weight: bold;
        }
        .signature {
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <h1>Certificado de Participação</h1>
        <p>Certificamos que <span class="bold">{{ $user->name }}</span></p>
        <p>Participou do evento <span class="bold">{{ $event->title }}</span></p>
        <div class="signature">
            <p>______________________________</p>
            <p>Organização do Evento</p>
        </div>
    </div>
</body>
</html>