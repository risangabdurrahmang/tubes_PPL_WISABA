VanillaTilt.init(document.querySelectorAll(".card-about"), {
  max: 25,
  speed: 400,
  easing: "cubic-bezier(.05,.80,.60,.99)",
  perspective: 500,
  transition: true,
});

var myModal = document.getElementById("myModal");
var myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", function () {
  myInput.focus();
});

const header = document.querySelector(".header");

window.addEventListener("scroll", () => {
  if (window.scrollY >= 450) {
    header.classList.add("scrolled");
  } else if (window.scrollY <= 400) {
    header.classList.remove("scrolled");
  }
});

pannellum.viewer("panorama", {
  type: "equirectangular",
  panorama: "../../img/",
  autoLoad: true,
  autoRotate: -2,
});

pannellum.viewer("panorama-1", {
  type: "equirectangular",
  panorama: "img/Panorama Curug Bayan.jpeg",
  autoLoad: true,
  autoRotate: -2,
});

pannellum.viewer("panorama-2", {
  type: "equirectangular",
  panorama: "img/Panorama GWK.jpg",
  autoLoad: true,
  autoRotate: -2,
});

pannellum.viewer("panorama-3", {
  type: "equirectangular",
  panorama: "img/Panorama Hutan Pinus.jpeg",
  autoLoad: true,
  autoRotate: -2,
});

pannellum.viewer("panorama-4", {
  type: "equirectangular",
  panorama: "img/Panorama Wana Wisata.jpeg",
  autoLoad: true,
  autoRotate: -2,
});

pannellum.viewer("panorama-5", {
  type: "equirectangular",
  panorama: "img/Panorama Telaga Sunyi.jpg",
  autoLoad: true,
  autoRotate: -2,
});
