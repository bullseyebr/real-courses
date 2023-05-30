function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdown-menu");
    dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
  }

  const hamburgerMenu = document.querySelector('.hamburger-menu');
const navbarMenu = document.querySelector('.navbar-menu');

hamburgerMenu.addEventListener('click', () => {
  navbarMenu.classList.toggle('show');
});