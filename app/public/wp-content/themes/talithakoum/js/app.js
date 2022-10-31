(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    let main_navigation = document.querySelector("#primary-menu");
    document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
    var tl = gsap.timeline({ repeat: 0, repeatDelay: 0 });
    tl.to("#hero", { duration: 1, opacity: 1 });
  });
})();
