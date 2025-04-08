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
            font-family: Arial, Helvetica, sans-serif;
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

        .vertical-menu {
            position: fixed;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 999;
        }

        .icon-button {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        .icon-button svg {
            width: 30px;
            height: 30px;
            fill: #666;
            transition: fill 0.3s ease, transform 0.3s ease;
        }

        .icon-button:hover svg {
            fill: #000;
            transform: scale(1.5);
        }

        .scroll-btn {
            padding: 10px 20px;
            border: none;
            color: white;
            cursor: pointer;
            position: relative;
            bottom: -35%;
            right: 0%;
        }
        .scroll-btn:hover {
            opacity: 0.8;
        }

        .scroll-btn.tentang { 
            background-color: #B1C29E; 
        }
        .scroll-btn.materi { 
            background-color: #FADA7A; 
        }

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

        .materi-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .materi-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            width: 200px; /* Adjust width as needed */
            text-decoration: none; /* Remove underline from links */
            color: inherit; /* Inherit text color */
            transition: box-shadow 0.3s, transform 0.3s; /* Smooth transition for shadow and transform */
        }

        .materi-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Shadow effect on hover */
            transform: scale(1.05) rotate(2deg); /* Scale and rotate effect */
        }

        .materi-image {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .tentang-card {
            background-color: white;
            color: #3E3F5B;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            width: 300px; /* Adjust width as needed */
            margin: 20px auto; /* Center the card */
        }

        .home-text {
            position: absolute;
            top: 10%; /* Positioning the text */
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white; /* Text color */
            z-index: 1; /* Ensure text is above the image */
        }

        .home-text h1 {
            font-size: 30px; /* Larger font size for the main heading */
            margin: 0;
            background: linear-gradient(135deg, #FCE7C8, #B1C29E, #FADA7A); /* Diagonal gradient */
            background-size: 300%; /* Increase the size for smooth animation */
            -webkit-background-clip: text; /* Clip the background to the text */
            -webkit-text-fill-color: transparent; /* Make the text color transparent */
        }
        .background-shape {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) skew(-20deg); /* Skew to create a parallelogram effect */
            width: 130%; /* Full width */
            height: 130%; /* Full height */
            background-color: rgba(255, 255, 255, 0.5); /* Background color with transparency */
            z-index: -1; /* Place behind the text */
        }

    </style>
</head>
<body>
    <!-- Vertical Menu -->
<div class="vertical-menu">
   <!-- Back Button (Home Icon) -->
    <button class="icon-button" onclick="scrollToSection('home')" aria-label="Back to Home">
        <svg viewBox="0 0 24 24">
        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>
    </button>
  
    <!-- Scroll Up (About/User Icon) -->
    <button class="icon-button" onclick="scrollToSection('tentang')" aria-label="Scroll to About">
        <svg viewBox="0 0 24 24">
        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
        </svg>
    </button>
  
    <!-- Scroll Down (List Icon) -->
    <button class="icon-button" onclick="scrollToSection('materi')" aria-label="Scroll to List">
        <svg viewBox="0 0 24 24">
        <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zm0-8h14V7H7v2z"/>
        </svg>
    </button>
</div>

    <div class="section" id="home" style="z-index: 10">
        <!--
        <div class="home-text">
            <div class="background-shape"></div>
            <h1>Welcome to Make You Move</h1>
        </div>
         -->
        <img class="home-image-3"
        src="{{ asset('storage/images/move3.png') }}" alt="Background" style="width: 70%; z-index: -1;">
    </div>
    
    <div class="section" id="tentang" style="z-index: 20;background-color: #B1C29E; color: white;">
        <h1>Tentang</h1>
        <div class="tentang-card">
            <h2>About Us</h2>
            <p>This is a brief description about our project.</p>
        </div>
    </div>
    
    <div class="section" id="materi" style="z-index: 30; background-color: #FADA7A;">
        <h1>Materi</h1>
        <div class="materi-cards">
            <a href="{{ route('tenaga') }}" class="materi-card">
                <img src="{{ asset('storage/images/energy-1.jpg') }}" alt="Tenaga" class="materi-image">
                <h2>Tenaga</h2>
            </a>
            <a href="{{ route('ruang') }}" class="materi-card">
                <img src="{{ asset('storage/images/space-1.jpg') }}" alt="Ruang" class="materi-image">
                <h2>Ruang</h2>
            </a>
            <a href="{{ route('waktu') }}" class="materi-card">
                <img src="{{ asset('storage/images/time-1.jpg') }}" alt="Waktu" class="materi-image">
                <h2>Waktu</h2>
            </a>
        </div>
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
       // GSAP Animation for Diagonal Gradient Effect
        const rainbowText = document.querySelector('.home-text h1');

        function animateGradient() {
            gsap.to(rainbowText, {
                backgroundPosition: "100% 100%", // Move the background gradient diagonally
                duration: 10, // Duration of the animation
                repeat: -1, // Repeat indefinitely
                ease: "none" // Linear easing for smooth transition
            });
        }

        // Start the animation
        animateGradient();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
