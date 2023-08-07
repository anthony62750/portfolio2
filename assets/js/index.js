let hamMenuIcon = document.getElementById("ham-menu"); // récuperer l'id du hamburger
let navBar = document.getElementById("nav-bar"); // recuperer l'id de la nav
let navLinks = navBar.querySelectorAll("li"); //recupere la liste

hamMenuIcon.addEventListener("click", () => {
  navBar.classList.toggle("active");
  hamMenuIcon.classList.toggle("fa-times");
}); // si click sur le hamburger, crée "active" dans la nav et "fa-times" dans l'icon
navLinks.forEach((navLinks) => {
  navLinks.addEventListener("click", () => {
    navBar.classList.remove("active");
    hamMenuIcon.classList.toggle("fa-times");
  });
}); // pour chaque element de la liste des qu'on clique desuus ça enleve la classe "active"

