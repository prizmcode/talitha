// Navigation toggle
window.addEventListener('load', function () {
  let main_navigation = document.querySelector('#primary-menu');
  document
    .querySelector('#primary-menu-toggle')
    .addEventListener('click', function (e) {
      e.preventDefault();
      main_navigation.classList.toggle('hidden');
    });

  var tl = gsap.timeline({ repeat: 0, repeatDelay: 0 });

  //add 3 tweens that will play in direct succession.
  tl.to('#hero', { duration: 1, opacity: 1 });
  
  /*
  tl.to('#offering', { duration: .7, opacity: 1 });
  tl.to('#hope-text', { duration: 1, opacity: 1 });
  tl.to('#allowing-text', { duration: .5, opacity: 1 });
  tl.to('#rise-up', { duration: 1, opacity: 1 });
  tl.to('#courage', { duration: .7, opacity: 1 });
  tl.to('#christ', { duration: 1, opacity: 1 });
  */

});
