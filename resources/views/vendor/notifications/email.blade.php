<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Відновлення пароля</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .logo {
            width: 100px;
            margin-bottom: 20px;
        }
        h1 {
            color: #1f2937;
            margin-bottom: 20px;
        }
        p {
            margin: 15px 0;
            font-size: 16px;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            background-color: #3b82f6;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #2563eb;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #6b7280;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="https://via.placeholder.com/100x100.png?text=Logo" alt="Logo" class="logo">
    <h1>{{ $greeting ?? 'Відновлення пароля' }}</h1>

    @foreach ($introLines as $line)
        <p>{{ $line }}</p>
    @endforeach

    <a href="{{ $actionUrl }}" class="button">{{ $actionText }}</a>

    @foreach ($outroLines as $line)
        <p>{{ $line }}</p>
    @endforeach

    <div class="footer">
        © {{ now()->year }} {{ config('app.name') }}. Всі права захищені.
    </div>
</div>
</body>
</html>
