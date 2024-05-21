document.addEventListener("DOMContentLoaded", function() {
    function screenchange() {
    
    let siteWidth = window.innerWidth;
    let siteHeight = window.innerHeight;


    document.getElementById("width").innerHTML = siteWidth;
    document.getElementById("height").innerHTML = siteHeight;

    if (sitHeight > sitWidth) {
      document.getElementById("landscapeOrPortrait").innerHTML = "Portrait";

    }
    else {
      document.getElementById("landscapeOrPortrait").innerHTML = "desktop";
    }

    window.addEventListener("resize", screenchange); 
    sreenchange();
    }

});
