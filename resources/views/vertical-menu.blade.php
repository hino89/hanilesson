<div class="vertical-menu-0" style="z-index: 10">
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