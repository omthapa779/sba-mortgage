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