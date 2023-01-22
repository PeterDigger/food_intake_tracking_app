const progressBars = {
    vege: document.getElementById("vege"),
    fruits: document.getElementById("fruits"),
    dairy: document.getElementById("dairy"),
    snack: document.getElementById("snack"),
  };
  
const texts = {
    vegetext: document.getElementById("vegetext"),
    fruitstext: document.getElementById("fruitstext"),
    dairytext: document.getElementById("dairytext"),
    snacktext: document.getElementById("snacktext"),
}

const banner = {
  sad: document.getElementById("failed_banner"),
  happy: document.getElementById("passed_banner"),
};

const buttons = {
  green: {
    vege: document.getElementById("greenbtn"),
    fruits: document.getElementById("greenbtn1"),
    dairy: document.getElementById("greenbtn2"),
    snack: document.getElementById("greenbtn3"),
  },
  red: {
    vege: document.getElementById("redbtn"),
    fruits: document.getElementById("redbtn1"),
    dairy: document.getElementById("redbtn2"),
    snack: document.getElementById("redbtn3"),
  },
};

let progressValues = {
  vege: 0,
  fruits: 0,
  dairy: 0,
  snack: 0,
};

for (const progressBar in progressBars) {
  progressBars[progressBar].style.width = progressValues[progressBar] + "%";
}

for (const type in banner) {
  banner[type].style.cursor = "pointer";
  banner[type].onclick = function () {
    banner[type].classList.toggle("invisible");
  };
}

  for (const color in buttons) {
    for (const progressBar in buttons[color]) {
      buttons[color][progressBar].addEventListener("click", function () {
        const isAdding = color === "green";
        const progressValue = progressValues[progressBar];
        const progressLimit = isAdding ? 100 : 0;
        const bannerType = isAdding ? "happy" : "sad";
        if (progressValue !== progressLimit) {
          progressValues[progressBar] += isAdding ? 20 : -20;
          progressBars[progressBar].style.width = progressValues[progressBar] + "%";
          texts["vegetext"].textContent = `${progressValues[progressBar]}`;
          banner[bannerType].classList.toggle("invisible");
          }
        })
      };
    }
  
  $("body").click(
      function(e)
      {
          if(e.target.className !== "form_wrapper")
          {
              $(".form_wrapper").hide();
          }
      }
  );
  
  var mouse_is_inside = false;
  
  $(document).ready(function()
  {
      $('.form_content').hover(function(){ 
          mouse_is_inside=true; 
      }, function(){ 
          mouse_is_inside=false; 
      });
  
      $("body").mouseup(function(){ 
          if(! mouse_is_inside) $('.form_wrapper').hide();
      });
  });