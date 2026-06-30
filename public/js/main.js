const canvas = document.getElementById("bg");
const ctx = canvas.getContext("2d");

let w, h;
let particles = [];

function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;

    createParticles();
}

window.addEventListener("resize", resize);

class Particle {

    constructor(x, y) {

        this.baseX = x;
        this.baseY = y;

        this.x = x;
        this.y = y;

        // حركة بسيطة جدًا
        this.vx = (Math.sin(x * 0.01) * 0.15);
        this.vy = (Math.cos(y * 0.01) * 0.15);

        this.r = 2;
    }

    update() {

        this.x += this.vx;
        this.y += this.vy;

        // يرجع لمكانه الأساسي لو بعد
        if (Math.abs(this.x - this.baseX) > 8)
            this.vx *= -1;

        if (Math.abs(this.y - this.baseY) > 8)
            this.vy *= -1;

        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.fillStyle = "#0075ff";
        ctx.fill();
    }
}

// function createParticles() {

//     particles = [];

//     const spacing = 120;

//     for (let x = spacing / 2; x < w; x += spacing) {

//         for (let y = spacing / 2; y < h; y += spacing) {

//             particles.push(new Particle(x, y));

//         }

//     }

// }
function createParticles() {

    particles = [];

    const spacing = 120;

    // نبدأ من خارج الشاشة وننتهي خارجها بشوية
    for (let x = -spacing; x <= w + spacing; x += spacing) {

        for (let y = -spacing; y <= h + spacing; y += spacing) {

            particles.push(new Particle(x, y));

        }

    }

}




function connect() {

    for (let a = 0; a < particles.length; a++) {

        for (let b = a + 1; b < particles.length; b++) {

            let dx = particles[a].x - particles[b].x;
            let dy = particles[a].y - particles[b].y;

            let dist = Math.sqrt(dx * dx + dy * dy);

            if (dist < 140) {

                ctx.beginPath();

                ctx.strokeStyle = `rgba(0,117,255,${1 - dist / 140})`;

                ctx.lineWidth = 0.6;

                ctx.moveTo(particles[a].x, particles[a].y);
                ctx.lineTo(particles[b].x, particles[b].y);

                ctx.stroke();
            }
        }
    }
}

function animate() {

    ctx.clearRect(0, 0, w, h);

    particles.forEach(p => p.update());

    connect();

    requestAnimationFrame(animate);
}

resize();
animate();
//

// const canvas = document.getElementById("bg");
// const ctx = canvas.getContext("2d");

// let w, h;
// let particles = [];

// function resize() {
//     w = canvas.width = window.innerWidth;
//     h = canvas.height = window.innerHeight;

//     createParticles();
// }

// window.addEventListener("resize", resize);

// class Particle {

//     constructor(x, y) {

//         this.baseX = x;
//         this.baseY = y;

//         this.x = x;
//         this.y = y;

//         this.vx = Math.sin(x * 0.01) * 0.15;
//         this.vy = Math.cos(y * 0.01) * 0.15;

//     }

//     update() {

//         this.x += this.vx;
//         this.y += this.vy;

//         if (Math.abs(this.x - this.baseX) > 8)
//             this.vx *= -1;

//         if (Math.abs(this.y - this.baseY) > 8)
//             this.vy *= -1;

//         // Glow
//         const glow = ctx.createRadialGradient(
//             this.x,
//             this.y,
//             0,
//             this.x,
//             this.y,
//             10
//         );

//         glow.addColorStop(0, "rgba(0,117,255,.20)");
//         glow.addColorStop(1, "rgba(0,117,255,0)");

//         ctx.fillStyle = glow;

//         ctx.beginPath();
//         ctx.arc(this.x, this.y, 10, 0, Math.PI * 2);
//         ctx.fill();

//         // Ring
//         ctx.beginPath();
//         ctx.arc(this.x, this.y, 5, 0, Math.PI * 2);
//         ctx.strokeStyle = "rgba(0,117,255,.35)";
//         ctx.lineWidth = 1;
//         ctx.stroke();

//         // Center Dot
//         ctx.beginPath();
//         ctx.arc(this.x, this.y, 2, 0, Math.PI * 2);
//         ctx.fillStyle = "#0a84ff";
//         ctx.fill();

//     }

// }

// function createParticles() {

//     particles = [];

//     const spacing = 120;

//     for (let x = spacing / 2; x < w; x += spacing) {

//         for (let y = spacing / 2; y < h; y += spacing) {

//             particles.push(new Particle(x, y));

//         }

//     }

// }

// function connect() {

//     for (let a = 0; a < particles.length; a++) {

//         for (let b = a + 1; b < particles.length; b++) {

//             let dx = particles[a].x - particles[b].x;
//             let dy = particles[a].y - particles[b].y;

//             let dist = Math.sqrt(dx * dx + dy * dy);

//             if (dist < 140) {

//                 ctx.beginPath();

//                 ctx.strokeStyle = `rgba(0,117,255,${0.25 - dist / 600})`;

//                 ctx.lineWidth = 0.6;

//                 ctx.moveTo(
//                     particles[a].x,
//                     particles[a].y
//                 );

//                 ctx.lineTo(
//                     particles[b].x,
//                     particles[b].y
//                 );

//                 ctx.stroke();

//             }

//         }

//     }

// }

// function animate() {

//     ctx.clearRect(0, 0, w, h);

//     particles.forEach(p => p.update());

//     connect();

//     requestAnimationFrame(animate);

// }

// resize();
// animate();
// //


//
const sections = document.querySelectorAll(".hds");

function revealSections() {

    sections.forEach(section => {

        const rect = section.getBoundingClientRect();

        // يظهر بمجرد دخول العنصر 80% من الشاشة
        if (rect.top <= window.innerHeight * 0.8) {
            section.classList.add("show");
        }

        // يختفي فقط بعد خروجه بالكامل من أعلى الشاشة
        if (rect.bottom < 0) {
            section.classList.remove("show");
        }

    });

}

window.addEventListener("scroll", revealSections);
window.addEventListener("resize", revealSections);
window.addEventListener("load", revealSections);

revealSections();


// function revealSections() {

//     sections.forEach(section => {

//         const rect = section.getBoundingClientRect();

//         // يظهر بمجرد دخول العنصر الشاشة
//         if (rect.top <= window.innerHeight - 100) {
//             section.classList.add("show");
//         }

//         // يختفي فقط لما يخرج بالكامل من أعلى الشاشة
//         if (rect.bottom <= 0) {
//             section.classList.remove("show");
//         }

//     });

// }

// window.addEventListener("scroll", revealSections);
// window.addEventListener("resize", revealSections);

// revealSections();
