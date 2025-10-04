// Fondo animado con imágenes PNG moviéndose suavemente
window.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('bg-particles');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let w = window.innerWidth, h = window.innerHeight;
        canvas.width = w; canvas.height = h;
        const imgPaths = ['/images/fondo1.png', '/images/fondo2.png', '/images/fondo3.png'];
        const images = [];
        let loaded = 0;
        imgPaths.forEach((src, i) => {
            const img = new Image();
            img.src = src;
            img.onload = () => {
                loaded++;
                if (loaded === imgPaths.length) startAnim();
            };
            images.push(img);
        });
        function startAnim() {
            // Crear múltiples copias animadas de cada imagen con movimiento profesional
            const sprites = [];
            const copiesPerImage = 5;
            const baseSize = 38;
            images.forEach(img => {
                for (let i = 0; i < copiesPerImage; i++) {
                    sprites.push({
                        img,
                        x: Math.random()*w,
                        y: Math.random()*h,
                        dx: -0.18 + Math.random()*0.36,
                        dy: -0.18 + Math.random()*0.36,
                        size: baseSize + Math.random()*12,
                        angle: Math.random()*Math.PI*2,
                        dAngle: (-0.005 + Math.random()*0.01),
                        alpha: 0.12 + Math.random()*0.12
                    });
                }
            });
            function draw() {
                ctx.clearRect(0,0,w,h);
                sprites.forEach(s => {
                    ctx.save();
                    ctx.translate(s.x, s.y);
                    ctx.rotate(s.angle);
                    ctx.globalAlpha = s.alpha;
                    ctx.drawImage(s.img, -s.size/2, -s.size/2, s.size, s.size);
                    ctx.restore();
                });
            }
            function update() {
                sprites.forEach(s => {
                    s.x += s.dx; s.y += s.dy; s.angle += s.dAngle;
                    if (s.x < -60) s.x = w+60;
                    if (s.x > w+60) s.x = -60;
                    if (s.y < -60) s.y = h+60;
                    if (s.y > h+60) s.y = -60;
                });
            }
            function loop() {
                draw(); update(); requestAnimationFrame(loop);
            }
            loop();
            window.addEventListener('resize', () => {
                w = window.innerWidth; h = window.innerHeight;
                canvas.width = w; canvas.height = h;
            });
        }
    }
});
