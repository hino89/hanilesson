<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('sakura-16px.png') }}" type="image/x-icon">
    <title>TERUWA</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    @include('home-images')
    @include('vertical-menu')
    @include('home-pengembang')
    <!-- @include('falling-sakura') -->
    <style>
        html {
            margin: 0;
            padding: 0;
            width: 100vw;
            overflow: hidden !important;
            box-sizing: border-box;
        }
        body {
            color: #3E3F5B;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        *, *::before, *::after {
            box-sizing: border-box !important;
            max-width: 100vw !important;
        }

        @media (max-width: 768px) {
            html {
                width: 100%;
                overflow-x: hidden !important;
                overflow-y: visible !important;
            }
            body {
                width: 100%;
                overflow-x: hidden !important;
                overflow-y: visible !important;
            }
        }

        

        .section {
            overflow-x: hidden !important;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1;
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
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
            text-align: center;
            width: 200px; /* Adjust width as needed */
            text-decoration: none; /* Remove underline from links */
            color: inherit; /* Inherit text color */
            transition: box-shadow 0.3s, transform 0.3s; /* Smooth transition for shadow and transform */
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }
        /* Floating animasi berbeda untuk tiap card */
        .materi-card:nth-child(1) {
            animation-duration: 3s;
            animation-delay: 0s;
        }

        .materi-card:nth-child(2) {
            animation-duration: 4s;
            animation-delay: 0.5s;
        }

        .materi-card:nth-child(3) {
            animation-duration: 5s;
            animation-delay: 1s;
        }
        

        .materi-card:hover {
            animation-play-state: paused;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Shadow effect on hover */
            transform: scale(1.05) rotate(2deg); /* Scale and rotate effect */
        }

        .materi-image {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .tentang-card {
            background-color: white;
            color: #3E3F5B;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
            text-align: center;
            width: 800px; /* Adjust width as needed */
            margin: 10px auto; /* Center the card */
        }

        .section-name {
            font-size: 5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .section-name-materi-1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .materi-cards {
                flex-wrap: wrap;
                justify-content: center;
                width: 100%;
                max-width: 100%;
            }
            .materi-card {
                width: 100px;
                font-size: small;
                max-width: 90%;
            }
        }

        @media (max-width: 768px) {
            .section {
                overflow: hidden !important;
            }
            .materi-buttons {
                flex-direction: column !important;
            }
            .tentang-card {
                width: 70% !important;
                max-width: 100% !important;
                box-sizing: border-box;
            }
            .home-image-3 {
                width: 80% !important;
                height: auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: -1;
                max-width: 100%;
            }
            .vertical-menu-0 {
                display: none;
            }
        }

        .section-continue-text {
            position: absolute;
            top: 90%;
            font-size: 1rem;
            z-index: 40;
            color: white;
            animation: bounceFade 2s infinite;
            display: none;
        }

        @media (max-width:768px) {
            .section-continue-text {
                display: block;
            }
        }

        .evaluasi-link {
            color: #1a73e8;
            font-weight: bold;
            text-decoration: none;
        }

        .evaluasi-link:hover {
            text-decoration: underline;
        }


        @keyframes bounceFade {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            50% {
                transform: translateY(10px);
                opacity: 0.5;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        
    </style>
</head>
<body>
    <!-- https://colorhunt.co/palette/adb2d4c7d9ddd5e5d5eef1da -->
    
    <div class="section" id="home" style="background-color:#610832">

         <div class="images-wrapper">
            <div class="home-image-1">
                <img src="{{ asset('storage/images/latar-utama.png') }}" alt="">
            </div>
        </div>
        <!-- 
        <img class="home-image-3"
        src="{{ asset('storage/images/move3.png') }}" alt="Background" style="width: 70%; z-index: 10;">
        -->
        <h1 class="section-continue-text">geser ke bawah &#x25BC</h1>
    </div>
    
    <div class="section" id="tentang" style="background-color: #C7D9DD; color: white;">

        <div class="images-wrapper">
            <div class="tentang-image-1">
                <img src="{{ asset('storage/images/tari-3.png') }}" alt="">
            </div>
        </div>

        <h1 class="section-name" style="z-index: 10;color: #3E3F5B;">TENTANG</h1>
        
        <div class="tentang-card" style="z-index: 10">
            <h2>TERUWA</h2>
            <p>Tenaga - Ruang - Waktu <br> Kelas VII</p>
            <p style="text-align: justify; margin:2rem;">
                Tujuan pembelajaran ini adalah agar siswa dapat menjelaskan kembali konsep ruang, waktu, dan tenaga dalam tari, serta memahami keterkaitannya sebagai dasar gerak tari. Siswa diharapkan mampu mengidentifikasi dan menerapkan ketiga elemen tersebut untuk mengekspresikan ide atau emosi dalam tarian secara kreatif dan bermakna.            
            </p>
        </div>
    </div>
    
    <div class="section" id="materi" style="background-color: #D5E5D5;">
        <div class="images-wrapper">
            <div class="materi-image-1">
                <img src="{{ asset('storage/images/tari-6.png') }}" alt="">
            </div>
        </div>
        <h1 class="section-name" style="z-index: 10;color: #3E3F5B;">MATERI</h1>
        <h1 class="section-name-materi-1" style="z-index: 10;color: #3E3F5B;">Pilih Salah Satu</h1>
        <div class="materi-cards" style="z-index: 10">
            <a href="{{ route('tenaga') }}" class="materi-card">
                <img src="{{ asset('storage/images/dance-svg-2.svg') }}" alt="Tenaga" class="materi-image">
                <h2>Tenaga</h2>
            </a>
            <a href="{{ route('ruang') }}" class="materi-card">
                <img src="{{ asset('storage/images/dance-svg-1.svg') }}" alt="Ruang" class="materi-image">
                <h2>Ruang</h2>
            </a>
            <a href="{{ route('waktu') }}" class="materi-card">
                <img src="{{ asset('storage/images/dance-svg-3.svg') }}" alt="Waktu" class="materi-image">
                <h2>Waktu</h2>
            </a>
        </div>
    </div>

    <div class="section" id="evaluasi" style="background-color: #C7D9DD; color: white;">

        <div class="images-wrapper">
            <!-- ganti  -->
            <div class="evaluasi-image-1">
                <img src="{{ asset('storage/images/tari-4.png') }}" alt="">
            </div>
        </div>

        <h1 class="section-name" style="z-index: 10;color: #3E3F5B;">EVALUASI</h1>
        
        <div class="tentang-card" style="z-index: 10">
            <h2>Jawab Soal Berikut</h2>
            <p style="text-align: justify; margin:2rem;">
                1. Apa yang dimaksud dengan unsur tenaga dalam tari? <br><br>
                2. Jelaskan perbedaan antara tenaga kuat dan tenaga lemah dalam gerakan tari! <br><br>
                3. Apa yang dimaksud dengan ruang dalam konteks tari? <br><br>
                4. Bagaimana penari memanfaatkan ruang panggung saat menari? <br><br>
                5. Apa arti unsur waktu dalam tari? <br><br>
                6. Mengapa penting bagi penari untuk memiliki kesadaran ruang dan waktu saat menari? <br><br>
                7. Berikan contoh gerakan tari yang menggunakan perpaduan tenaga kuat, ruang luas! <br><br>

                <br>

                Worksheet Google-Form:
                <a href="https://docs.google.com/forms/d/1zL37-rZWT36PZ8ey1emBJpGB0b8j1R3LLpKo2LrVQIw/viewform"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="evaluasi-link">
                    Buka Form
                </a>

            </p>
        </div>
    </div>

    <div class="section" id="profil" style="background-color: #D5E5D5; color: white;">

        <h1 class="section-name" style="z-index: 10;color: #3E3F5B;font-size:3rem;">PENGEMBANG</h1>
        
        @yield('pengembang-card')
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            
            if (section) {
                gsap.to(window, { 
                    scrollTo: { 
                        y: section.offsetTop, 
                        offsetY: 0 
                    },
                    duration: 1
                });
            }
        }
        
        
        let isTabVisible = true;
        document.addEventListener("visibilitychange", () => {
            isTabVisible = !document.hidden;
        });

       document.querySelectorAll(".section-name").forEach(el => {
            el.style.textShadow = "5px 5px 0 white";
        });

        document.querySelectorAll(".section-name-materi-1 ").forEach(el => {
            el.style.textShadow = "2px 2px 0 white";
        });
        
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
