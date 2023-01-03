// Dashboard
const greenbtn = document.getElementById("greenbtn")
const greenbtn1 = document.getElementById("greenbtn1")
const greenbtn2 = document.getElementById("greenbtn2")
const redbtn = document.getElementById("redbtn")
const redbtn1 = document.getElementById("redbtn1")
const redbtn2 = document.getElementById("redbtn2")
const sad = document.getElementById("failed_banner")
const happy = document.getElementById("passed_banner")

const vege = document.getElementById("vege")
const fruits = document.getElementById("fruits")
const dairy = document.getElementById("dairy")

let vegeVal = 0
let fruitsVal = 0
let dairyVal = 0
vege.style.width = vegeVal + "%"
fruits.style.width = fruitsVal + "%"
dairy.style.width = dairyVal + "%"

// pipe the value from the database to js 

document.cookie = "cookieName=cookieValue";


console.log(greenbtn.parentElement.id)

greenbtn.addEventListener("click", function() {
    if (vegeVal < 100){
        vegeVal += 20
        vege.style.width = vegeVal + "%"
        if (vegeVal === 100 ){
            happy.classList.toggle("invisible");
            setTimeout(function(){
                happy.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        vegeVal = 100
        vege.style.width = vegeVal + "%"
    }
})

greenbtn1.addEventListener("click", function() {
    if (fruitsVal < 100){
        fruitsVal += 20
        fruits.style.width = fruitsVal + "%"
        if (fruitsVal === 100 ){
            happy.classList.toggle("invisible");
            setTimeout(function(){
                happy.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        fruitsVal = 100
        fruits.style.width = fruitsVal + "%"
    }
})

greenbtn2.addEventListener("click", function() {
    if (dairyVal < 100){
        dairyVal += 20
        dairy.style.width = dairyVal + "%"
        if (dairyVal === 100 ){
            happy.classList.toggle("invisible");
            setTimeout(function(){
                happy.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        dairyVal = 100
        dairy.style.width = dairyVal + "%"
    }
})

redbtn.addEventListener("click", function() {
        if (vegeVal > 0){
            vegeVal -= 20
            vege.style.width = vegeVal + "%"
            if (vegeVal === 0 ){
                sad.classList.toggle("invisible");
                setTimeout(function(){
                    sad.classList.toggle("invisible");
                }, 3000);
            }
        }else{
            vegeVal = 0
            vege.style.width = vegeVal + "%"
        }
})

redbtn1.addEventListener("click", function() {
    if (fruitsVal > 0){
        fruitsVal -= 20
        fruits.style.width = fruitsVal + "%"
        if (fruitsVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        fruitsVal = 0
        fruits.style.width = fruitsVal + "%"
    }
})

redbtn2.addEventListener("click", function() {
    if (dairyVal > 0){
        dairyVal -= 20
        dairy.style.width = dairyVal + "%"
        if (diaryVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        dairyVal = 0
        dairy.style.width = dairyVal + "%"
    }

})

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

