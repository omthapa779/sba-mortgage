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
