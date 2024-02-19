


document.addEventListener("DOMContentLoaded", function () {
    // "DOMContentLoaded": when the page is loaded, follow code will be excuted
    const category = document.querySelectorAll(".category");
    category.forEach((element) => {
      element.addEventListener("click", function () {
        const breedList = element.getElementsByClassName("list"); // document.querySelector('.list');
        if (breedList.length > 0) {
            breedList.item(0).style.display =
            breedList.item(0).style.display === "none" ||
            breedList.item(0).style.display === ""
              ? "block"
              : "none";
        }
      });
  
    });
   
    const catYearElement = document.getElementById("catyear");
    console.log(`catYearElement:  ${catYearElement}`);
    if (catYearElement) {
      catYearElement.addEventListener("click", function () {
        // Redirect to another PHP file
        window.location.href = "http://localhost/image/cat_year.html?";
      });
    }
    
  document.getElementById("british").addEventListener("click", function() {
    window.location.href = "https://en.wikipedia.org/wiki/British_Shorthair";
});
document.getElementById("maine").addEventListener("click", function() {
  window.location.href = "https://en.wikipedia.org/wiki/Maine_Coon";
});
  
document.getElementById("bichon").addEventListener("click", function() {
  window.location.href = "https://en.wikipedia.org/wiki/Bichon";
});
document.getElementById("golden").addEventListener("click", function() {
  window.location.href = "https://en.wikipedia.org/wiki/Golden_Retriever";
});


document.getElementById("dwarf").addEventListener("click", function() {
  window.location.href = "https://en.wikipedia.org/wiki/Netherland_Dwarf_rabbit";
});


document.getElementById("vulpes").addEventListener("click", function() {
  window.location.href = "https://en.wikipedia.org/wiki/Vulpes";
});


  });
   
  let home = document.getElementById("home");
  //not every page has a home
  if (home) {
    home.addEventListener("click", function () {
      window.location.href = "http://localhost/image/index.php?";
    });
  }

