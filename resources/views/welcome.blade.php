<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            padding: 20px;
            max-width: 600px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.8;
        }

        .countdown {
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 40px;
        }

        .email-box input {
            padding: 10px;
            width: 70%;
            border: none;
            border-radius: 4px 0 0 4px;
        }

        .email-box button {
            padding: 10px 20px;
            background-color: #ff6b6b;
            border: none;
            color: white;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .email-box button:hover {
            background-color: #ff4b4b;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 500px) {
            h1 {
                font-size: 2rem;
            }

            .countdown {
                font-size: 1.5rem;
            }

            .email-box input {
                width: 60%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>🚀 Coming Soon</h1>
        <p>We're working hard to launch our new website. Stay tuned!</p>
        {{-- <div class="countdown" id="countdown">00d 00h 00m 00s</div>

        <div class="email-box">
            <input type="email" placeholder="Enter your email">
            <button>Notify Me</button>
        </div> --}}
    </div>

    <script>
        // Countdown to a future date (e.g. 1 month from now)
        const countDownDate = new Date();
        countDownDate.setDate(countDownDate.getDate() + 30);

        const countdown = document.getElementById("countdown");

        setInterval(() => {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdown.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }, 1000);
    </script>

</body>

</html>