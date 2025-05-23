<div class="vertical-menu-0" style="z-index: 10">
    <!-- Back Button (Home Icon) -->

    <button class="icon-button" onclick="scrollToSection('petunjuk')" aria-label="Back to Home">
        <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
    <path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 
             10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm1.07-7.75
             c-.9.92-1.07 1.24-1.07 2.25h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26
             c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 
             1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
  </svg>
    </button>

    <button class="icon-button" onclick="scrollToSection('home')" aria-label="Back to Home">
        <svg viewBox="0 0 24 24">
        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>
    </button>

    <!-- Scroll Up (About/User Icon) -->
    <button class="icon-button" onclick="scrollToSection('tentang')" aria-label="Scroll to About">
        <svg viewBox="0 0 24 24">
        <path d="M3 3v18h18V3H3zm10 15h-2v-2h2v2zm0-4h-2V7h2v7z"/>
        </svg>
    </button>

    <!-- Scroll Down (List Icon) -->
    <button class="icon-button" onclick="scrollToSection('materi')" aria-label="Scroll to List">
        <svg viewBox="0 0 24 24">
        <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zm0-8h14V7H7v2z"/>
        </svg>
    </button>

    <!-- Icon Evaluasi -->
    <button class="icon-button" onclick="scrollToSection('evaluasi')" aria-label="Scroll to List">
        <svg viewBox="0 0 24 24">
        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 
                2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 
                2-2V5c0-1.1-.9-2-2-2zm-7-1c.55 0 1 
                .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 
                1-1zm-1 14l-3.5-3.5 1.41-1.41L11 
                13.17l5.09-5.09 1.41 1.41L11 16z"/>
        </svg>
    </button>

    <!-- Icon Profil -->
    <button class="icon-button" onclick="scrollToSection('profil')" aria-label="Scroll to List">
        <svg viewBox="0 0 24 24">
        <path d="M12 12c2.7 0 4.88-2.18 
                4.88-4.88S14.7 2.25 12 2.25 7.12 4.43 
                7.12 7.12 9.3 12 12 12zm0 
                2.25c-3.04 0-9 1.52-9 4.5V21h18v-2.25c0-2.98-5.96-4.5-9-4.5z"/>
        </svg>
    </button>
</div>

<style>
.vertical-menu-0 {
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
</style>