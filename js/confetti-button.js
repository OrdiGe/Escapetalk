var maxParticleCount = 750,
    particleSpeed = 5,
    startConfetti, stopConfetti, toggleConfetti, removeConfetti;
! function() {
    const challengesBox = document.querySelector('.challenges-box')
    startConfetti = startConfettiInner, stopConfetti = stopConfettiInner, toggleConfetti = toggleConfettiInner, removeConfetti = removeConfettiInner;
    var colors = ["DodgerBlue", "OliveDrab", "Gold", "Pink", "SlateBlue", "LightBlue", "Violet", "PaleGreen", "SteelBlue", "SandyBrown", "Chocolate", "Crimson"],
        streamingConfetti = !1,
        animationTimer = null,
        particles = [],
        waveAngle = 0;

    function resetParticle(particle, width, height) {
        return particle.color = colors[Math.random() * colors.length | 0], particle.x = Math.random() * width, particle.y = Math.random() * height - height, particle.diameter = 1 * Math.random() + 5, particle.tilt = 10 * Math.random() - 10, particle.tiltAngleIncrement = .07 * Math.random() + .05, particle.tiltAngle = 0, particle
    }

    function startConfettiInner() {
        var width = window.innerWidth,
            height = window.innerHeight;
            window.requestAnimFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
            return window.setTimeout(callback, 16.6666667)
        };
        var canvas = document.getElementById("confetti-canvas");
        null === canvas && document.body.appendChild(canvas), canvas.width = width, canvas.height = height, window.addEventListener("resize", (function() {
            canvas.width = window.innerWidth, canvas.height = window.innerHeight
        }), !0);
        for (var context = canvas.getContext("2d"); particles.length < maxParticleCount;) particles.push(resetParticle({}, width, height));
        streamingConfetti = !0, null === animationTimer && function runAnimation() {
            context.clearRect(0, 0, window.innerWidth, window.innerHeight), 0 === particles.length ? animationTimer = null : (updateParticles(), drawParticles(context), animationTimer = requestAnimFrame(runAnimation))
        }()
    }

    function stopConfettiInner() {
        streamingConfetti = !1
    }

    function removeConfettiInner() {
        stopConfetti(), particles = []
    }

    function toggleConfettiInner() {
        streamingConfetti ? stopConfettiInner() : startConfettiInner()
    }

    function drawParticles(context) {
        for (var particle, x, i = 0; i < particles.length; i++) particle = particles[i], context.beginPath(), context.lineWidth = particle.diameter, context.strokeStyle = particle.color, x = particle.x + particle.tilt, context.moveTo(x + particle.diameter / 2, particle.y), context.lineTo(x, particle.y + particle.tilt + particle.diameter / 2), context.stroke()
    }

    function updateParticles() {
        var width = window.innerWidth,
            height = window.innerHeight,
            particle;
        waveAngle += .01;
        for (var i = 0; i < particles.length; i++) particle = particles[i], !streamingConfetti && particle.y < -15 ? particle.y = height + 100 : (particle.tiltAngle += particle.tiltAngleIncrement, particle.x += Math.sin(waveAngle), particle.y += .5 * (Math.cos(waveAngle) + particle.diameter + particleSpeed), particle.tilt = 15 * Math.sin(particle.tiltAngle)), (particle.x > width + 20 || particle.x < -20 || particle.y > height) && (streamingConfetti && particles.length <= maxParticleCount ? resetParticle(particle, width, height) : (particles.splice(i, 1), i--))
    }
}();