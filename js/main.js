
// WELCOME WORD ANIMATION
anime({
  targets: '#willkommen path',
  strokeDashoffset: [anime.setDashoffset, 0],
  fill: '#fff',
  easing: 'easeInOutQuad',
  duration: 8000,
  direction: 'alternate',
  loop: false
});

// // SOCIAL MEDIA LINKS ICON ANIMATION
// let socials = anime({
//   targets: '.icon1',
//   translateX: anime.stagger(100),
//   // delay: ,
//   duration: 3000,
//   loop: true
// });
// // SOCIAL MEDIA LINKS ICON EVEN LISTENERS
// document.querySelector('.contacts').addEventListener('mouseover', () => {
//   socials.pause();
// });
// document.querySelector('.contacts').addEventListener('mouseout', () => {
//   socials.play();
// });

// THE BACKGROUND CIRCLES ANIMATION 
let circles = anime.timeline({
  direction: 'alternate',
  easing: 'easeInOutQuad',
  loop: true
});

circles.add({
  targets: '.circ',
  translateX: anime.stagger(5, {grid: [15, 10], from: 'center', axis: 'x'}),
  translateY: anime.stagger(5, {grid: [15, 10], from: 'center', axis: 'y'}),
  rotateZ: anime.stagger([0, 90], {grid: [15, 10], from: 'center', axis: 'x'}),
  delay: anime.stagger(150, {grid: [15, 10], from: 'center'})
});

circles.add({
  targets: '.circ',
  translateX: anime.stagger(10, {grid: [15, 10], from: 'center', axis: 'x'}),
  translateY: anime.stagger(10, {grid: [15, 10], from: 'center', axis: 'y'}),
  rotateZ: anime.stagger([0, 90], {grid: [15, 10], from: 'center', axis: 'x'}),
  delay: anime.stagger(200, {grid: [15, 10], from: 'center'})
});

circles.add({
  targets: '.circ',
  translateX: anime.stagger(15, {grid: [15, 10], from: 'center', axis: 'x'}),
  translateY: anime.stagger(15, {grid: [15, 10], from: 'center', axis: 'y'}),
  rotateZ: anime.stagger([90, 180], {grid: [15, 10], from: 'center', axis: 'x'}),
  delay: anime.stagger(200, {grid: [15, 10], from: 'center'})
});

circles.add({
  targets: '.circ',
  translateX: anime.stagger(20, {grid: [15, 10], from: 'center', axis: 'x'}),
  translateY: anime.stagger(20, {grid: [15, 10], from: 'center', axis: 'y'}),
  rotateZ: anime.stagger([270, 360], {grid: [15, 10], from: 'center', axis: 'x'}),
  delay: anime.stagger(200, {grid: [15, 10], from: 'center'})
});

document.querySelector('.back_bars').addEventListener('mouseover', () => {
  circles.pause();
});

document.querySelector('.back_bars').addEventListener('mouseout', () => {
  circles.play();
})
