// nav_bar hovers
const navContent = document.getElementsByClassName('nav_content');

// Loop through each element and add the event listener
Array.from(navContent).forEach(element => {
    element.addEventListener('mouseover', () => {
            gsap.to(element, {
            duration: 0.6,
            fontWeight: 700,
            color: '#129fd9',
        });
    });
    element.addEventListener('mouseleave', () => {
        gsap.to(element, {
        duration: 0.6,
        fontWeight: 500,
        color: 'white',
    });
});
});


//smooth scroll
// Initialize Lenis
const lenis = new Lenis({
    autoRaf: true,
  });
  
  // Listen for the scroll event and log the event data
  lenis.on('scroll', (e) => {
    console.log(e);
  });


  function menu_extended() {
    const menu = document.querySelector('.menu_extended');
    const body = document.querySelector('body');

    if (menu.style.display === 'block') {
        // Animate menu out and enable content interaction
        gsap.to(menu, {
            opacity: 0,
            duration: 0.5,
            onComplete: () => {
                menu.style.display = 'none';
                body.style.overflow = 'auto'; // Enable scrolling
            }
        });
    } else {
        // Show menu with animation and disable content interaction
        menu.style.display = 'flex';
        gsap.fromTo(
            menu,
            { opacity: 0 },
            {
                opacity: 1,
                duration: 0.5,
                onStart: () => {
                    body.style.overflow = 'hidden'; // Disable scrolling
                }
            }
        );
    }
}
