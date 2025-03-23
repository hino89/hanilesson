<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Menu</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
            background-color: #FCE7C8;
            color: #3E3F5B;
            font-family: Arial, sans-serif;
            margin: 0;
            overflow-x: hidden;
            overflow-y: hidden;
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
            gap: 20px;
            padding: 10px 20px;
            border-radius: 10px;
        }
        .menu-item {
            padding: 15px 30px;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: background 0.3s;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .scroll-btn {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
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
            background-color: #F0A04B;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16px;
        }
        .materi-button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="menu home" id="menu">
        <div class="menu-item home" onclick="scrollToSection('tentang')">Tentang</div>
        <div class="menu-item home" onclick="scrollToSection('materi')">Materi</div>
    </div>

    <div class="section" id="home">
        <h1>Home Section</h1>
        <img src="{{ asset('storage/images/move3.png') }}" alt="Background" style="width: 30%">
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
