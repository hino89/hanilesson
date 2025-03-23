<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makeyoumove</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        html {
            overflow: hidden;  /* Prevents scrolling */
            width: 100%;
            height: 100%;
            touch-action: none;
        }
        body {
            background-color: #FCE7C8;
            color: #3E3F5B;
            font-family: Arial, sans-serif;
            margin: 0;
            overflow-x: hidden;
            overflow-y: hidden;
            touch-action: none;
        }
        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .menu {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            padding: 10px 20px;
        }
        .menu-item {
            padding: 15px 30px;
            color: white;
            cursor: pointer;
            text-align: center;
            transition: background 0.3s;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            font-size: 18px;
            font-weight: bold;
        }

        .scroll-btn {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            color: white;
            cursor: pointer;
        }
        .scroll-btn:hover {
            opacity: 0.8;
        }

        /* Dynamic Background Colors */

        .menu-item.home { background-color: #FCE7C8; }
        .menu-item.tentang { background-color: #B1C29E; }
        .menu-item.materi { background-color: #FADA7A; }

        .scroll-btn.tentang { background-color: #B1C29E; }
        .scroll-btn.materi { background-color: #FADA7A; }

        .materi-buttons {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .materi-button {
            padding: 15px 30px;
            background-color: #B1C29E;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }
        .materi-button:hover {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .section {
                overflow: hidden;
            }
            .materi-buttons {
                flex-direction: column;
            }
            .home-image-3 {
                width: 100% !important;
                height: auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: -1;
            }
        }
    </style>
</head>
<body>
    <div class="menu home" id="menu">
        <div class="menu-item home menu-tentang" onclick="scrollToSection('tentang')">Tentang</div>
        <div class="menu-item home menu-materi" onclick="scrollToSection('materi')">Materi</div>
    </div>

    <div class="section" id="home">
        <img class="home-image-3"
        src="{{ asset('storage/images/move3.png') }}" alt="Background" style="width: 70%; z-index: -1;">
    </div>
    
    <div class="section" id="tentang" style="background-color: #B1C29E; color: white;">
        <h1>Tentang Section</h1>
        <button class="scroll-btn tentang" onclick="scrollToSection('home')">Back to Top</button>
    </div>
    
    <div class="section" id="materi" style="background-color: #FADA7A;">
        <h1>Materi Section</h1>
        <div class="materi-buttons">
            <a href="{{ route('home') }}" class="materi-button">Tenaga</a>
            <a href="{{ route('home') }}" class="materi-button">Ruang</a>
            <a href="{{ route('home') }}" class="materi-button">Waktu</a>
        </div>
        <button class="scroll-btn materi" onclick="scrollToSection('home')">Back to Top</button>
    </div>

    <script>
        function scrollToSection(sectionId) {
            gsap.to(window, { scrollTo: { y: "#" + sectionId, offsetY: 0 }, duration: 1, onComplete: () => updateMenu(sectionId) });
        }

        function updateMenu(sectionId) {
            const menu = document.getElementById("menu");
            menu.className = "menu " + sectionId;
            document.querySelectorAll(".menu-item").forEach(item => {
                item.className = "menu-item " + sectionId;
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
