<div class="vertical-menu">
    <!-- Back Button -->
    <button class="icon-button" onclick="history.back()" style="margin-bottom :50px" aria-label="Back">
        <svg viewBox="0 0 24 24">
        <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z"/>
        </svg>
    </button>

    <!-- Scroll Up -->
    <button id="up-button" class="icon-button" aria-label="Scroll Up">
        <svg viewBox="0 0 24 24">
        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
        </svg>
    </button>

    <!-- Scroll Down -->
    <button id="down-button" class="icon-button"  aria-label="Scroll Down">
        <svg viewBox="0 0 24 24">
        <path d="M7.41 8.59 12 13.17l4.59-4.58L18 10l-6 6-6-6z"/>
        </svg>
    </button>
</div>

<style>
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
</style>