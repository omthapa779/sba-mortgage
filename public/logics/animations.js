let tl = gsap.timeline();

tl.to('.loading_title span',{
    duration: 1,
    scrub: 0,
    stagger: 0.2,
    top: '0vh',
});
tl.to('.loading_bar',{
    duration: 1.5,
    scrub: 0,
    width: '100%',
    delay: '-0.5'
});
tl.to('.main_container',{
    duration: 0.1,
    display: 'block',
})
tl.to('.loading',{
    duration: 0.1,
    opacity: '0%',
    display: 'none',
});
tl.to('.hero_load',{
    duration: 1,
    stagger: 0.2,
    top: '0vh',
});

// services_card_animation
const serviceCards = document.getElementsByClassName('service_card');

Array.from(serviceCards).forEach(card => {
    const contentHolder = card.querySelector('.service_content_holder');
    const viewMoreButton = card.querySelector('.view_more_button');

    card.addEventListener('mouseover', () => {
        // Kill any ongoing animation on the elements to avoid interference
        gsap.killTweensOf([contentHolder, viewMoreButton, card]);
        gsap.to(card, {
            duration: 0.6,
            boxShadow: 'rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px',
        });
        gsap.to(contentHolder, {
            duration: 0.6,
            top: '150%',
        });
        gsap.to(viewMoreButton, {
            duration: 0.6,
            top: '0%',
        });
    });
    card.addEventListener('mouseleave', () => {
        // Kill any ongoing animation on the elements to avoid interference
        gsap.killTweensOf([contentHolder, viewMoreButton, card]);
        gsap.to(card, {
            duration: 0.6,
            boxShadow: 'rgba(3, 102, 214, 0.3) 0px 0px 0px 3px',
        });
        gsap.to(contentHolder, {
            duration: 0.6,
            top: '0%',
        });
        gsap.to(viewMoreButton, {
            duration: 0.6,
            top: '150%',
        });
    });
});


const teamCards = document.getElementsByClassName('team_card');

Array.from(teamCards).forEach((teamCard) => {
    const hoverCard = teamCard.querySelector('.hover_card');
    
    teamCard.addEventListener('mouseover', () => {
        gsap.to(hoverCard, {
            duration: 0.5,
            width: '75%',
        });
    });

    teamCard.addEventListener('mouseleave', () => {
        gsap.to(hoverCard, {
            duration: 0.5,
            width: '0%',
        });
    });
});