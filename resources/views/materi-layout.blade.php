
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- GSAP & ScrollToPlugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

    <title>@yield('title')</title>

    @yield('images')
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: #eeeeea;
        overflow: hidden; /* Prevent default scrolling */
    }

    .wrapper {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        height: 500px;
        display: flex;
        flex-wrap: nowrap;
        justify-content: start;
    }

    .card {
        width: 80px;
        border-radius: .75rem;
        background-size: cover;
        cursor: pointer;
        overflow: hidden;
        border-radius: 2rem;
        margin: 0 10px;
        display: flex;
        align-items: flex-end;
        transition: .6s cubic-bezier(.28,-0.03,0,.99);
        box-shadow: 0px 10px 30px -5px rgba(0,0,0,0.8);
    }

    .card > .row {
        color: white;
        display: flex;
        flex-wrap: nowrap;
    }

    .card > .row > .icon {
        background: #223;
        color: white;
        border-radius: 50%;
        width: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 15px;
    }

    .card > .row > .description {
        display: flex;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
        height: 80px;
        width: 520px;
        opacity: 0;
        transform: translateY(30px);
        transition-delay: .3s;
        transition: all .3s ease;
    }

    .description p {
        color: #b0b0ba;
        padding-top: 5px;
    }

    .description h4 {
        text-transform: uppercase;
    }

    input {
        display: none;
    }

    input:checked + label {
        width: 600px;
    }

    input:checked + label .description {
        opacity: 1 !important;
        transform: translateY(0) !important;
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

    .scroll-container {
      position: relative;
    }

    section {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
    }

    .section-1 {
      background-color: #ffffff;
    }

    .section-2 {
      background-color: #e5e5e5;
    }


    </style>
</head>
<body>
<!-- Vertical Menu -->
<div class="vertical-menu">
    <!-- Back Button -->
    <button class="icon-button" onclick="history.back()" aria-label="Back">
        <svg viewBox="0 0 24 24">
        <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z"/>
        </svg>
    </button>

    <!-- Scroll Up -->
    <button class="icon-button" onclick="scrollToSection(0)" aria-label="Scroll Up">
        <svg viewBox="0 0 24 24">
        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
        </svg>
    </button>

    <!-- Scroll Down -->
    <button class="icon-button" onclick="scrollToSection(1)" aria-label="Scroll Down">
        <svg viewBox="0 0 24 24">
        <path d="M7.41 8.59 12 13.17l4.59-4.58L18 10l-6 6-6-6z"/>
        </svg>
    </button>
</div>

<!-- Sections -->
<div class="scroll-container" id="scroll-container">
    <section class="section-1">
        <div class="wrapper">
            <div class="container">
                @yield('content-1')
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="wrapper">
            <div class="container">
                @yield('content-2')
            </div>
        </div>
    </section>
</div>

  <script>
    function scrollToSection(index) {
      const sections = document.querySelectorAll("#scroll-container section");
      if (sections[index]) {
        gsap.to(window, {
          duration: 1,
          scrollTo: { y: sections[index], offsetY: 0 },
          ease: "power2.inOut"
        });
      }
    }
  </script>
    
</body>
</html>