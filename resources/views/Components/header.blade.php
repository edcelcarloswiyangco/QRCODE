<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CCA Parking portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #015c25;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Keeps logo left, menu right */
            flex-wrap: wrap; /* Important for mobile breakdown */
            color: white;
            font-family: sans-serif;
            
        }

        .logo img {
            height: 50px;
            display: block;
        }

        nav h3 {
            margin-right: auto;
            margin-left: 15px;
            font-size: 1.2rem;
        }

        /* Desktop Menu */
        .menu {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .menu div a {
            cursor: pointer;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        /* Burger Icon (Hidden on Desktop) */
        .burger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
        }
        .burger div {
            width: 25px;
            height: 3px;
            background-color: white;
        }

        /* --- MOBILE VIEW (Tablet & Phone) --- */
        @media screen and (max-width: 768px) {
            nav h3 {
                font-size: 1rem; /* Smaller text on mobile */
            }

            /* Show Burger */
            .burger {
                display: flex;
            }

            /* Hide Menu by default */
            .menu {
                display: none;
                width: 100%;
                flex-direction: column;
                text-align: center;
                margin-top: 15px;
                border-top: 1px solid rgba(255,255,255,0.2);
            }

            .menu div {
                padding: 15px 0;
                width: 100%;
            }
            
            .menu div:hover {
                background-color: rgba(255,255,255,0.1);
            }

            /* Class to show menu when clicked */
            .menu.active {
                display: flex;
            }
        }
    </style>


</head>
<body>

    <nav>
        <div class="logo">
            <img alt="CCA logo" src="{{ asset('Img/CCA_SEAL_DARK.png') }}">
        </div>
        
        <h3>City College of Angeles</h3>

        <div class="burger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="menu" id="navMenu">
            <div><a href="">Home</a></div>
            <div><a href="#">About</a></div>
            <div><a href="#">Contact</a></div>
            <div><a href="{{ route('login') }}">Login</a></div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
        }
    </script>