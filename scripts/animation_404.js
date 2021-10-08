gsap.timeline({
    delay: 0,
    repeat: -1,
    yoyo: false,
    repeatDelay: 0,
    ease: "none",
  })

  .to('.plant',
    { x: '200%'})
  .to('.plant',
    { rotateY: '180'})
  .to('.plant',
    { x: '20%'})
  .to('.plant',
    { rotateY: '0'})
  