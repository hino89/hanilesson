<style>

.tentang-flower-1 img {
    position: absolute;
    width: 550px;
    left: 73%;
    top: 155%;
    transform: translate(-50%, -50%);
    z-index: 0;
    animation: spin 30s linear infinite;
    overflow: hidden;
}

.materi-flower-1 img {
    position: absolute;
    width: 550px;
    left: 73%;
    top: 260%;
    transform: translate(-50%, -50%);
    z-index: 0;
    overflow: hidden;
}

@media (max-width: 768px) {
    .tentang-flower-1 {
        width: 100px;
    }
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

</style>

