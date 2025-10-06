<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Failed</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
        /* Reset and basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:'Open Sans', sans-serif;
        }

        body {
            background-color: #f6f6f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 60px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            max-width: 450px;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #ff6300;
            margin-bottom: 20px;
        }

        .status {
            font-size: 72px;
            font-weight: bold;
            color: #ff6300;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 12px 30px;
            background-color: #ff6300;
            color: #fff;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e55b00;
        }

        @media (max-width: 500px) {
            .container {
                padding: 40px 20px;
            }
            h1 {
                font-size: 24px;
            }
            .status {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">Casual Cravers</div>
        <div class="status">⚠️</div>
        <h1>Connection Failed</h1>
        <p>Oops! It seems like something went wrong. Please check your internet connection or try again later.</p>
    </div>
</body>
</html>