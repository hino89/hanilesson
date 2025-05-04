<style>
    .flower-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 300vh;
        overflow: hidden !important;
        pointer-events: none;
    }
    
    .tentang-flower-1 {
        overflow: hidden;
    }
    
    .materi-flower-1 {
        overflow: hidden;
    }
    
    .tentang-flower-1 img {
        position: absolute;
        width: 550px;
        max-width: 100vw;
        height: auto;
        left:  75%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 0 !important;
        animation: spin 30s linear infinite;
    }
    
    .materi-flower-1 img {
        position: absolute;
        width: 550px;
        max-width: 100vw;
        height: auto;
        left:  60%;
        top: 100%;
        transform: translate(-50%, -100%);
        z-index: 0 !important;
    }
    
    @media (max-width: 768px) {
    
    }
    
    @keyframes spin {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }
    
    </style>
    
    