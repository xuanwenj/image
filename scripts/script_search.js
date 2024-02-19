document.addEventListener("DOMContentLoaded", function () {

      let home = document.getElementById("home");
      if (home) {
        home.addEventListener("click", function () {
          window.location.href = "http://localhost/image/index.php?";
        });
      }

   });
