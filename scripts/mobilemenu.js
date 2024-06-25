const hamburgerMenu = document.querySelector("#hamburguer-menu");
const nv = document.querySelector(".navbar-menu");

hamburgerMenu.addEventListener("click", () => {
  nv.classList.toggle("is-active");

});
