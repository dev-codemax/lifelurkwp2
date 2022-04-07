
// const menu = document.querySelector('.menu--list')
// const cancelButton = document.querySelector('.cancel--icon')
// const menuButton = document.getElementById('vipul')

// menuButton.addEventListener('click', function (event) {
//   menu.classList.add("active")
//   menuButton.classList.add("hide")
//   cancelButton.classList.remove("hide")
// });


// cancelButton.addEventListener('click', function (event) {
//   menu.classList.remove("active")
//   cancelButton.classList.add("hide")
//   menuButton.classList.remove("hide")
// });








// search icon anim 

const search__icon = document.querySelector(".search__icon")
const search__container = document.querySelector(".search__container")
const biSearch = document.querySelector(".bi-search")



search__icon.addEventListener("click", () => {
  search__icon.classList.toggle("search__icon__anim")
  search__container.classList.toggle("search__container__anim")
  biSearch.classList.toggle("bi-search__anim")
});

// menu icon anim 

const menu__button = document.querySelector(".menu__button");
const menu__line1 = document.querySelector(".menu__line1")
const menu__line2 = document.querySelector(".menu__line2")
const menu__line3 = document.querySelector(".menu__line3")
const hero__click = document.querySelector(".hero__click")

const cancel__button = document.querySelector(".cancel__button");
const cancel__line1 = document.querySelector(".cancel__line1")
const cancel__line2 = document.querySelector(".cancel__line2")

menu__button.addEventListener("click", () => {

  menu__line1.classList.toggle("menu__line1anim")
  menu__line2.classList.toggle("menu__line2anim")
  menu__line3.classList.toggle("menu__line3anim")
  hero__click.classList.toggle("hero__click__anim")
  cancel__line1.classList.toggle("cancel__line1anim")
  cancel__line2.classList.toggle("cancel__line2anim")
});



cancel__button.addEventListener("click", () => {
  menu__line1.classList.toggle("menu__line1anim")
  menu__line2.classList.toggle("menu__line2anim")
  menu__line3.classList.toggle("menu__line3anim")
  hero__click.classList.toggle("hero__click__anim")
  cancel__line1.classList.toggle("cancel__line1anim")
  cancel__line2.classList.toggle("cancel__line2anim")
});

const navBar = document.querySelector('.nav__bar ')

window.onscroll = () => {
  this.scrollY > 40 ? navBar.classList.add("sticky") : navBar.classList.remove("sticky");
}
