<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('sakura-16px.png') }}" type="image/x-icon">
    <title>TERUWA</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        html {
            width: 100%;
            height: 100%;
            touch-action: none;
            overflow: hidden;
        }

        body {
            background-color: #FCE7C8;
            color: #3E3F5B;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            touch-action: none;
        }

        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1;
        }

        .vertical-menu {
            position: fixed;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 50px;
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

        .section-name {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        #floating-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            overflow: visible;
            z-index: 0;
        }
        .glitter, .sakura {
            position: absolute;
            top: -50px;
            pointer-events: none;
            z-index: 0; /* this makes them stay behind */
        }
        .sakura {
            width: 24px;
            height: 24px;
            background-image: url({{ asset('storage/images/sakura.png') }});
            background-size: contain;
            background-repeat: no-repeat;
        }
        .glitter {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.8);
        }

    </style>
</head>
<body>
    <div id="floating-container"></div>
    <!-- Vertical Menu -->
<div class="vertical-menu" style="z-index: 10">
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

    <div class="section" id="home">

        <img class="home-image-3"
        src="{{ asset('storage/images/move3.png') }}" alt="Background" style="width: 70%; z-index: 10;">
    </div>
    
    <div class="section" id="tentang" style="background-color: #B1C29E; color: white;">
        <h1 class="section-name" style="z-index: 10">Tentang</h1>
        <div class="tentang-card" style="z-index: 10">
            <h2>About Us</h2>
            <p>This is a brief description about our project.</p>
        </div>
    </div>
    
    <div class="section" id="materi" style="background-color: #FADA7A;">
        <h1 class="section-name" style="z-index: 10">Materi</h1>
        <div class="materi-cards" style="z-index: 10">
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
            gsap.to(window, { scrollTo: { y: "#" + sectionId, offsetY: 0 }, duration: 1});
        }

        gsap.registerPlugin(ScrollTrigger);

        // Floating animation function
        function animateFall(el) {
            const fallDistance = window.innerHeight * 3.2;
            const speed = 150;
            const duration = fallDistance / speed;

            // Random scale (normal to large)
            const scale = 0.8 + Math.random() * 1.2; // range: 0.8 to 2.0
            el.style.transform = `scale(${scale})`;

            setTimeout(() => {
                if (el.parentNode) el.remove();
            }, duration * 1000 + 2000);

            // Fall down
            gsap.to(el, {
                y: fallDistance,
                x: "+=" + (Math.random() * 40 - 20),
                rotation: "+=" + (Math.random() > 0.5 ? 360 : -360),
                duration: duration,
                ease: "linear",
                onComplete: () => el.remove()
            });

            // Flutter (horizontal wiggle + rotate wiggle)
            gsap.to(el, {
                x: '+=15',
                rotation: '+=20',
                repeat: -1,
                yoyo: true,
                duration: 1 + Math.random(),
                ease: 'sine.inOut'
            });

            // Twinkle if glitter
            if (el.classList.contains("glitter")) {
                gsap.to(el, {
                opacity: 1,
                scale: 1.3,
                duration: 0.5 + Math.random() * 0.5,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
                });
            }

        }

        let isTabVisible = true;
        document.addEventListener("visibilitychange", () => {
            isTabVisible = !document.hidden;
        });

        // Create falling item (glitter or sakura)
        function spawn(type) {
            if (!isTabVisible) return;

            const el = document.createElement("div");
            el.className = type;
            el.style.left = Math.random() * 100 + "vw";
            el.style.top = "-30px";
            document.getElementById("floating-container").appendChild(el);
            animateFall(el);
        }

        // Continuous spawn loop
        setInterval(() => {
        spawn("glitter");
        }, 500); 

        setInterval(() => {
        spawn("sakura");
        }, 1000); 

        

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
