<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('sakura-16px.png') }}" type="image/x-icon">
    <title>TERUWA</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    @include('home-flowers')
    @include('vertical-menu')
    <style>
        html {
            width: 100vw;
            height: 100vh;
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
        .scroll-container {
            position: relative;
        }
        section {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: -1;
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
        .materi-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .materi-card {
            position: relative;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
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
            position: relative;
            background-color: white;
            color: #3E3F5B;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
            text-align: center;
            width: 800px; /* Adjust width as needed */
            margin: 10px auto; /* Center the card */
            z-index: 100 !important;
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
            height: 300vh;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }
        .glitter, .sakura {
            overflow: hidden;
            position: absolute;
            top: -50px;
            pointer-events: none;
            will-change: transform;
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

        @media (max-width: 768px) {
            .materi-cards {
                width: 60%;
                flex-direction: row;
                gap: 20px;
            }
            .materi-card {
                width: 100px;
                font-size: small;
            }
        }

        @media (max-width: 768px) {
            section {
                overflow: hidden;
            }
            .materi-buttons {
                flex-direction: column !important;
            }
            .tentang-card {
                width: 60% !important;
                z-index: 20;
            }
            .home-image-3 {
                width: 80% !important;
                height: auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: -1;
            }
            html {
                overflow: hidden;
            }
        }

    </style>
</head>
<body>
    <!--
    <div id="floating-container"></div>
    -->
    <!-- Vertical Menu -->
    

<div class="scroll-container" id="scroll-container">
    <section class="section-0" id="home">

            <img class="home-image-3"
            src="{{ asset('storage/images/move3.png') }}" alt="Background" style="width: 70%; z-index: 10;">
    </section>
    <section class="section-1" id="tentang" style="background-color: #B1C29E; color: white;">
            <h1 class="section-name" style="z-index: 10">Tentang</h1>
            <div class="tentang-flower-1">
                <img src="{{ asset('storage/images/blue-flower.png') }}" alt="">
            </div>
            <div class="tentang-card">
                <h2>TERUWA</h2>
                <p>Tenaga - Ruang - Waktu <br> Kelas VII</p>
            </div>
    </section>
    <section class="section-2" id="materi"style="background-color: #FADA7A;">
            <div class="materi-flower-1">
                <img src="{{ asset('storage/images/lavender.png') }}" alt="">
            </div>
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
    </section>
</div>
    
    

    <script>
    const sections = document.querySelectorAll('section');
    let currentSection = 0;
    let isScrolling = false;

    function scrollToSection(index) {
        if (index >= 0 && index < sections.length && !isScrolling) {
            isScrolling = true;
            currentSection = index;

            gsap.to(window, {
                duration: 1,
                scrollTo: {
                    y: sections[index],
                    offsetY: 0
                },
                onComplete: () => {
                    isScrolling = false;
                }
            });
        }
    }

    // Button listeners
    document.getElementById('up-button').addEventListener('click', () => {
        scrollToSection(currentSection - 1);
    });

    document.getElementById('down-button').addEventListener('click', () => {
        scrollToSection(currentSection + 1);
    });




        
    /*
        // Floating animation function
        function animateFall(el) {
            const fallDistance = window.innerHeight * 3.1;
            const speed = 150;
            const duration = fallDistance / speed;

            // Random scale (normal to large)
            const scale = 0.8 + Math.random() * 1.2;
            el.style.transform = `scale(${scale})`;

            // Fall down + fade out for both glitter and sakura
            gsap.to(el, {
                y: fallDistance,
                x: "+=" + (Math.random() * 40 - 20),
                rotation: "+=" + (Math.random() > 0.5 ? 360 : -360),
                opacity: 1, // <-- fade out while falling
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

            // Twinkle effect only for glitter
            if (el.classList.contains("glitter")) {
                gsap.to(el, {
                    scale: 1.3,
                    repeat: -1,
                    yoyo: true,
                    duration: 0.5 + Math.random() * 0.5,
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
            el.style.top = "-15px";
            document.getElementById("floating-container").appendChild(el);
            animateFall(el);
        }
            */
        /*
        // Continuous spawn loop
        setInterval(() => {
        spawn("glitter");
        }, 500); 

        setInterval(() => {
        spawn("sakura");
        }, 1000); 
        */

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
