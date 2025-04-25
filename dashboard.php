<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(6px);
        }

        .success-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            color: white;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-in-out;
        }

        .success-container h1 {
            font-size: 2.5rem;
            color: #009dff;
            text-shadow: 0 0 10px #009dff, 0 0 20px #009dff;
            animation: glow 2s infinite alternate;
        }

        .success-container p {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #009dff, 0 0 20px #009dff;
            }
            to {
                text-shadow: 0 0 20px #009dff, 0 0 30px #009dff;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="success-container">
        <h1>🎉 Registration Successful!</h1>
        <p>Welcome to your dashboard.</p>
    </div>

</body>
</html>
