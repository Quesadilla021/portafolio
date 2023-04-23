<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo correo electrónico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #444;
            background-color: #f8f8f8;
        }

        .container {
            width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        }

        h1 {
            font-size: 24px;
            color: #444;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table td:first-child {
            width: 120px;
            font-weight: bold;
            background-color: #eee;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nuevo correo electrónico</h1>
        <table>
            <tr>
                <td>Nombre:</td>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td>Correo electrónico:</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td>Asunto:</td>
                <td>{{ $data['subject'] }}</td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td>{{ $data['message'] }}</td>
            </tr>
        </table>
    </div>
</body>
</html>