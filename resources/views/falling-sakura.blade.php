<style>
        #falling-stuff-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 300vh;
            overflow: hidden !important;
            pointer-events: none;
        }
        .glitter, .sakura {
            overflow: hidden;
            position: absolute;
            top: -50px;
            pointer-events: none;
            will-change: transform;
            z-index: 1; /* this makes them stay behind */
        }
        .sakura {
            width: 24px;
            height: 24px;
            background-image: url({{ asset('storage/images/sakura.png') }});
            background-size: contain;
            background-repeat: no-repeat;
        }
        .glitter {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.8);
        }
</style>

<div id="falling-stuff-wrapper"></div>

<script>
// Floating animation function
        function animateFall(el) {
            const fallDistance = window.innerHeight * 3;
            const speed = 150;
            const duration = fallDistance / speed;
            const fadeDuration = 1;

            // Random scale (normal to large)
            const scale = 0.8 + Math.random() * 1.2;
            el.style.transform = `scale(${scale})`;

            el.style.opacity = 1;

            // Fall down + fade out for both glitter and sakura
            gsap.to(el, {
                y: fallDistance,
                x: "+=" + (Math.random() * 40 - 20),
                rotation: "+=" + (Math.random() > 0.5 ? 360 : -360),
                duration: duration,
                ease: "linear",
                onComplete: () => {
                    gsap.killTweensOf(el); // Matikan semua animasi GSAP terkait elemen ini
                    el.remove();           // Lalu hapus dari DOM
                }
            });

            gsap.to(el, {
                opacity: 0,
                delay: duration - fadeDuration,
                duration: fadeDuration,
                ease: "sine.out"
            });

            // Flutter (horizontal wiggle + rotate wiggle)
            gsap.to(el, {
                x: '+=15',
                rotation: '+=20',
                repeat: -1,
                yoyo: true,
                duration: 1 + Math.random(),
                ease: 'sine.inOut'
            });

            // Twinkle effect only for glitter
            if (el.classList.contains("glitter")) {
                gsap.to(el, {
                    scale: 1.3,
                    repeat: -1,
                    yoyo: true,
                    duration: 0.5 + Math.random() * 0.5,
                    ease: "sine.inOut"
                });
            }
        }

         // Create falling item (glitter or sakura)
         function spawn(type) {
            if (!isTabVisible) return;

            const el = document.createElement("div");
            el.className = type;
            el.style.left = Math.random() * 100 + "vw";
            el.style.top = "-15px";
            document.getElementById("falling-stuff-wrapper").appendChild(el);
            animateFall(el);
        }
        
        // Continuous spawn loop
        setInterval(() => {
        spawn("glitter");
        }, 500); 

        setInterval(() => {
        spawn("sakura");
        }, 1000); 

</script>