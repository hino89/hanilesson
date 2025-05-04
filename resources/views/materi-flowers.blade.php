<style>
.flower-1 img {
    position: absolute;
    width: 550px;
    left: 73%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 0 !important;
    animation: spin 30s linear infinite;
    overflow: hidden;
}

.flower-2 img {
    position: absolute;
    width: 550px;
    left: 20%;
    top: 100%;
    transform: translate(-50%, -50%);
    z-index: 0 !important;
    animation: spin 30s linear infinite;
    overflow: hidden;
}

@media (max-width: 768px) {
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

</style>

