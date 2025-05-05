<style>
.wrapper {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.container {
    height: 70%;
    display: flex;
    flex-wrap: nowrap;
    justify-content: start;
    overflow: hidden;
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
    flex-direction: column;
    align-items: flex-start;
    transition: .6s cubic-bezier(.28,-0.03,0,.99);
    border: 1px solid rgba(0, 0, 0, 0.1);
    background-color: white;
}

.card-video {
    position: relative;
    height: 100%;
    width: 100%;
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
    height: 50px;
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
    height: 100px;
    width: 540px;
    opacity: 0;
    transform: translateY(30px);
    transition-delay: .3s;
    transition: all .3s ease;
}

.description p {
    color: #b0b0ba;
    font-size: medium;
    padding-top: 5px;
    padding-bottom: 5px;
    
}

.description h4 {
    font-size: medium;
    color: #000;
    text-transform: uppercase;
}

.card-video {
    opacity: 0;
    z-index: -1;
    display: none;
}

input {
    display: none;
}

input:checked + label .card-video {
    opacity: 1;
    z-index: 10;
    display: block;
}

input:checked + label {
    width: 800px;
}

input:checked + label .description {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

@media (max-width: 768px) {
    .description h4 {
        margin-top: 5px;
    }
    .container {
        height: auto;
        width: 80%;
        flex-direction: column;
        margin-left: 10%;
    }   
    .card {
        margin: 0;
    }
    input:checked + label {
        width: 100% !important;
    }
    .card > .row > .icon {
        width: 50px !important;
        height: 50px !important;
    }
    .card > .row > .description {
        display: flex;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
        height: fit-content;
        width: 100%;
        word-wrap: break-word;     /* Pecah kata jika kepanjangan */
        overflow-wrap: break-word; /* Untuk kompatibilitas tambahan */
        opacity: 0;
        transform: translateY(30px);
        transition-delay: .3s;
        transition: all .3s ease;
        display: none;
    }

    input:checked + label .description {
        display: block !important;
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    
}
</style>

<script>
    // Get all radio inputs and all video elements
    const radios = document.querySelectorAll('input[name="slide"]');
    const videos = document.querySelectorAll('.card-video');
  
    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        // Pause all videos first
        videos.forEach(video => {
          video.pause();
          // Optional: reset to beginning
          // video.currentTime = 0;
        });
  
        // Find the label associated with the checked radio
        if (radio.checked) {
          const label = document.querySelector(`label[for="${radio.id}"]`);
          const video = label.querySelector('.card-video');
  
          // Optional: play the selected video
          // video.play();
        }
      });
    });
</script>
  
