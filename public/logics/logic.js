// NAVIGATION HOVER ANIMATIONS
const navItems = document.querySelectorAll('.nav_content');

// Add hover animations to navigation items
navItems.forEach((item) => {
    item.addEventListener('mouseover', () => {
        gsap.to(item, { duration: 0.6, fontWeight: 700, color: '#129fd9' });
    });
    item.addEventListener('mouseleave', () => {
        gsap.to(item, { duration: 0.6, fontWeight: 500, color: 'white' });
    });
});

// SMOOTH SCROLL INITIALIZATION
// Initialize Lenis for smooth scrolling
const lenis = new Lenis({
    autoRaf: true,
});

// Animation loop for Lenis
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// MENU EXTENDED TOGGLE
function menu_extended() {
    const menu = document.querySelector('.menu_extended');
    const body = document.querySelector('body');

    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'flex';
        gsap.fromTo(
            menu,
            { opacity: 0 },
            {
                opacity: 1,
                duration: 0.5,
                onStart: () => {
                    body.style.overflow = 'hidden'; // Disable scrolling
                },
            }
        );
    }
}

// MENU CLOSE TOGGLE
function menu_close() {
    const menu = document.querySelector('.menu_extended');
    const body = document.querySelector('body');

    gsap.to(menu, {
        opacity: 0,
        duration: 0.5,
        onComplete: () => {
            menu.style.display = 'none';
            body.style.overflow = 'auto'; // Enable scrolling
        },
    });
}


//preview for blog upload
document.getElementById('image-upload').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('image-preview');
            preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
        }
        reader.readAsDataURL(file);
    }
});