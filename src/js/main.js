// Dashboard
const greenbtn = document.getElementById("greenbtn")
const greenbtn1 = document.getElementById("greenbtn1")
const greenbtn2 = document.getElementById("greenbtn2")
const greenbtn3 = document.getElementById("greenbtn3")
const redbtn = document.getElementById("redbtn")
const redbtn1 = document.getElementById("redbtn1")
const redbtn2 = document.getElementById("redbtn2")
const redbtn3 = document.getElementById("redbtn3")
const sad = document.getElementById("failed_banner")
const happy = document.getElementById("passed_banner")

const vegetext = document.getElementById("vegetext")
const fruitstext = document.getElementById("fruitstext")
const dairytext = document.getElementById("dairytext")
const snacktext = document.getElementById("snacktext")

const vege = document.getElementById("vege")
const fruits = document.getElementById("fruits")
const dairy = document.getElementById("dairy")
const snack = document.getElementById("snack")

let vegeVal = 0
let fruitsVal = 0
let dairyVal = 0
let snackVal = 0

vege.style.width = vegeVal + "%"
fruits.style.width = fruitsVal + "%"
dairy.style.width = dairyVal + "%"
snack.style.width = snackVal + "%"


vegetext.innerHTML = 'Today: ' + vegeVal / 20 + '/5';
fruitstext.innerHTML = 'Today: ' + fruitsVal / 20 + '/5';
dairytext.innerHTML = 'Today: ' + dairyVal / 20 + '/5';
snacktext.innerHTML = 'Today: ' + snackVal / 20 + '/5';


// pipe the value from the database to js 

document.cookie = "cookieName=cookieValue";

// console.log(greenbtn.parentElement.id)

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
    vegetext.innerHTML = 'Today: ' + vegeVal / 20 + '/5';
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
    fruitstext.innerHTML = 'Today: ' + fruitsVal / 20 + '/5';
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
    dairytext.innerHTML = 'Today: ' + dairyVal / 20 + '/5';
})

greenbtn3.addEventListener("click", function() {
    if (snackVal < 100){
        snackVal += 20
        snack.style.width = snackVal + "%"
        if (snackVal === 100 ){
            happy.classList.toggle("invisible");
            setTimeout(function(){
                happy.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        snackVal = 100
        snack.style.width = snackVal + "%"
    }
    snacktext.innerHTML = 'Today: ' + snackVal / 20 + '/5';
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
    vegetext.innerHTML = 'Today: ' + vegeVal / 20 + '/5';
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
    fruitstext.innerHTML = 'Today: ' + fruitsVal / 20 + '/5';
})

redbtn2.addEventListener("click", function() {
    if (dairyVal > 0){
        dairyVal -= 20
        dairy.style.width = dairyVal + "%"
        if (dairyVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        dairyVal = 0
        dairy.style.width = dairyVal + "%"
    }
    dairytext.innerHTML = 'Today: ' + dairyVal / 20 + '/5';
})

redbtn3.addEventListener("click", function() {
    if (snackVal > 0){
        snackVal -= 20
        snack.style.width = snackVal + "%"
        if (snackVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    }else{
        snackVal = 0
        snack.style.width = snackVal + "%"
    }
    snacktext.innerHTML = 'Today: ' + snackVal / 20 + '/5';
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

