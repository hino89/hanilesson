<style>
.images-wrapper {
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

.home-image-1 img {
    position: absolute;
    width: 300px;
    max-width: 100vw;
    height: auto;
    left:  50%;
    top: 19%;
    transform: translate(-50%, -50%);
    z-index: 0 !important;
}

.materi-image-1 img {
    position: absolute;
    width: 700px;
    max-width: 100vw;
    height: auto;
    left:  25%;
    top: 100%;
    transform: translate(-50%, -100%);
    z-index: 0 !important;
}

.tentang-image-1 img {
    position: absolute;
    width: 700px;
    max-width: 100vw;
    height: auto;
    left:  70%;
    top: 66%;
    transform: translate(-50%, -100%);
    z-index: 0 !important;
}

@media (max-width: 768px) {
    .tentang-image-1 img {
        width: 800px !important;
    }
    .materi-image-1 img {
        width: 800px !important;
    }
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

</style>

