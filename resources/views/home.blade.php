<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Menu</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
            background-color: #222;
            color: white;
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
        }
        .menu-item {
            padding: 15px 30px;
            background-color: #444;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: background 0.3s;
        }
        .menu-item:hover {
            background-color: #666;
        }
        .scroll-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #666;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .scroll-btn:hover {
            background-color: #888;
        }
    </style>
</head>
<body>
    <div class="menu">
        <div class="menu-item" onclick="scrollToSection('tentang')">Tentang</div>
        <div class="menu-item" onclick="scrollToSection('materi')">Materi</div>
    </div>

    <div class="section" id="home">
        <h1>Home Section</h1>
    </div>
    <div class="section" id="tentang" style="background-color: #333;">
        <h1>Tentang Section</h1>
        <button class="scroll-btn" onclick="scrollToSection('home')">Back to Top</button>
    </div>
    <div class="section" id="materi" style="background-color: #444;">
        <h1>Materi Section</h1>
        <button class="scroll-btn" onclick="scrollToSection('home')">Back to Top</button>
    </div>

    <script>
        function scrollToSection(sectionId) {
            gsap.to(window, { scrollTo: { y: "#" + sectionId, offsetY: 0 }, duration: 1 });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
