/* Link Scrool */

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});



/* Mascara Telefone */
$(document).ready(function () {
  $("#telefone").val("(XX) XXXXX-XXXX");
  VMasker(document.getElementById("telefone")).maskPattern("(99) 99999-9999");
});
