// Dashboard
const greenbtn = document.getElementById("greenbtn")
const greenbtn1 = document.getElementById("greenbtn1")
const greenbtn2 = document.getElementById("greenbtn2")
const greenbtn3 = document.getElementById("greenbtn3")
const redbtn = document.getElementById("redbtn")
const redbtn1 = document.getElementById("redbtn1")
const redbtn2 = document.getElementById("redbtn2")
const redbtn3 = document.getElementById("redbtn3")
const happy = document.getElementById("passed_banner")
const sad = document.getElementById("failed_banner")
const save = document.getElementById("saved_banner")

// Badge
const levely = document.getElementById("levell")
// const levely = document.getElementById("")

const vegetext = document.getElementById("vegetext")
const fruitstext = document.getElementById("fruitstext")
const dairytext = document.getElementById("dairytext")
const snacktext = document.getElementById("snacktext")

const vege = document.getElementById("vege")
const fruits = document.getElementById("fruits")
const dairy = document.getElementById("dairy")
const snack = document.getElementById("snack")


if (vegeVal >= 6) {
    vege.style.width = 100 + "%"
}else{
    vege.style.width = vegeVal * 20 + "%"
}

if (fruitsVal >= 6) {
    fruits.style.width = 100 + "%"
}else{
    fruits.style.width = fruitsVal * 20 + "%"
}

if (dairyVal >= 6) {
    dairy.style.width = 100 + "%"
}else{
    dairy.style.width = dairyVal * 20 + "%"
}

if (snackVal >= 6) {
    snack.style.width = 100 + "%"
}else{
    snack.style.width = snackVal * 20 + "%"
}

vegetext.innerHTML = 'Today: ' + vegeVal + '/5 Servings';
fruitstext.innerHTML = 'Today: ' + fruitsVal + '/5 Servings';
dairytext.innerHTML = 'Today: ' + dairyVal + '/5 Servings';
snacktext.innerHTML = 'Today: ' + snackVal + '/5 Servings';

greenbtn.addEventListener("click", function() {
    
    vegeVal += 1
    vegetext.innerHTML = 'Today: ' + vegeVal + '/5 Servings';

    if(vegeVal >= 5){
        vege.style.width = 100 + "%"
    }else if(vegeVal === 4){
        vege.style.width = 80 + "%"
    }else if(vegeVal === 3){
        vege.style.width = 60 + "%"
    }else if(vegeVal === 2){
        vege.style.width = 40 + "%"
    }else if(vegeVal === 1){
        vege.style.width = 20 + "%"
    }else if(vegeVal === 0){
        vege.style.width = 0 + "%"
    }

    if (vegeVal === 5 ){
        happy.classList.toggle("invisible");
        setTimeout(function(){
            happy.classList.toggle("invisible");
        }, 3000);
    }

})


greenbtn1.addEventListener("click", function() {
    fruitsVal += 1
    fruitstext.innerHTML = 'Today: ' + fruitsVal + '/5 Servings';

    if(fruitsVal >= 5){
        fruits.style.width = 100 + "%"
    }else if(fruitsVal === 4){
        fruits.style.width = 80 + "%"
    }else if(fruitsVal === 3){
        fruits.style.width = 60 + "%"
    }else if(fruitsVal === 2){
        fruits.style.width = 40 + "%"
    }else if(fruitsVal === 1){
        fruits.style.width = 20 + "%"
    }else if(fruitsVal === 0){
        fruits.style.width = 0 + "%"
    }

    if (fruitsVal === 5 ){
        happy.classList.toggle("invisible");
        setTimeout(function(){
            happy.classList.toggle("invisible");
        }, 3000);
    }
})

greenbtn2.addEventListener("click", function() {
        dairyVal += 1
        dairytext.innerHTML = 'Today: ' + dairyVal + '/5 Servings';
    
        if(dairyVal >= 5){
            dairy.style.width = 100 + "%"
        }else if(dairyVal === 4){
            dairy.style.width = 80 + "%"
        }else if(dairyVal === 3){
            dairy.style.width = 60 + "%"
        }else if(dairyVal === 2){
            dairy.style.width = 40 + "%"
        }else if(dairyVal === 1){
            dairy.style.width = 20 + "%"
        }else if(dairyVal === 0){
            dairy.style.width = 0 + "%"
        }
    
        if (dairyVal === 5 ){
            happy.classList.toggle("invisible");
            setTimeout(function(){
                happy.classList.toggle("invisible");
            }, 3000);
        }
})

greenbtn3.addEventListener("click", function() {
    snackVal += 1
    snacktext.innerHTML = 'Today: ' + snackVal + '/5 Servings';

    if(snackVal >= 5){
        snack.style.width = 100 + "%"
    }else if(snackVal === 4){
        snack.style.width = 80 + "%"
    }else if(snackVal === 3){
        snack.style.width = 60 + "%"
    }else if(snackVal === 2){
        snack.style.width = 40 + "%"
    }else if(snackVal === 1){
        snack.style.width = 20 + "%"
    }else if(snackVal === 0){
        snack.style.width = 0 + "%"
    }

    if (snackVal === 5 ){
        sad.classList.toggle("invisible");
        setTimeout(function(){
            sad.classList.toggle("invisible");
        }, 3000);
    }
})

redbtn.addEventListener("click", function() {
    if (vegeVal > 0){
        vegeVal -= 1
        vegetext.innerHTML = 'Today: ' + vegeVal + '/5 Servings';
    
        if(vegeVal >= 5){
            vege.style.width = 100 + "%"
        }else if(vegeVal === 4){
            vege.style.width = 80 + "%"
        }else if(vegeVal === 3){
            vege.style.width = 60 + "%"
        }else if(vegeVal === 2){
            vege.style.width = 40 + "%"
        }else if(vegeVal === 1){
            vege.style.width = 20 + "%"
        }else if(vegeVal === 0){
            vege.style.width = 0 + "%"
        }
    
        if (vegeVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    } 
})

redbtn1.addEventListener("click", function() {
    if (fruitsVal > 0){
        fruitsVal -= 1
        fruitstext.innerHTML = 'Today: ' + fruitsVal + '/5 Servings';
    
        if(fruitsVal >= 5){
            fruits.style.width = 100 + "%"
        }else if(fruitsVal === 4){
            fruits.style.width = 80 + "%"
        }else if(fruitsVal === 3){
            fruits.style.width = 60 + "%"
        }else if(fruitsVal === 2){
            fruits.style.width = 40 + "%"
        }else if(fruitsVal === 1){
            fruits.style.width = 20 + "%"
        }else if(fruitsVal === 0){
            fruits.style.width = 0 + "%"
        }
    
        if (fruitsVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    } 
})

redbtn2.addEventListener("click", function() {
    if (dairyVal > 0){
        dairyVal -= 1
        dairytext.innerHTML = 'Today: ' + dairyVal + '/5 Servings';
    
        if(dairyVal >= 5){
            dairy.style.width = 100 + "%"
        }else if(dairyVal === 4){
            dairy.style.width = 80 + "%"
        }else if(dairyVal === 3){
            dairy.style.width = 60 + "%"
        }else if(dairyVal === 2){
            dairy.style.width = 40 + "%"
        }else if(dairyVal === 1){
            dairy.style.width = 20 + "%"
        }else if(dairyVal === 0){
            dairy.style.width = 0 + "%"
        }
    
        if (dairyVal === 0 ){
            sad.classList.toggle("invisible");
            setTimeout(function(){
                sad.classList.toggle("invisible");
            }, 3000);
        }
    } 
})

redbtn3.addEventListener("click", function() {
    if (snackVal > 0){
        snackVal -= 1
        snacktext.innerHTML = 'Today: ' + snackVal + '/5 Servings';
    
        if(snackVal >= 5){
            snack.style.width = 100 + "%"
        }else if(snackVal === 4){
            snack.style.width = 80 + "%"
        }else if(snackVal === 3){
            snack.style.width = 60 + "%"
        }else if(snackVal === 2){
            snack.style.width = 40 + "%"
        }else if(snackVal === 1){
            snack.style.width = 20 + "%"
        }else if(snackVal === 0){
            snack.style.width = 0 + "%"
        }
    
        if (snackVal === 0 ){
            happy.classList.toggle("invisible");
            setTimeout(function(){
                happy.classList.toggle("invisible");
            }, 3000);
        }
    } 
})

function updatelevel(){
    // Send an AJAX request to a PHP script to fetch the data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../backends/levels.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.responseText) {
            // Parse the JSON response and update the progress bars
            var response = JSON.parse(xhr.responseText);
    
            // Iterate through each object in the response array update the progress bar 
            for (var i = 0; i < response.length; i++) {
                var newlevel = parseInt(response[i].levels);
                var newstars = parseInt(response[i].no_stars);
    
                levely.innerHTML = newlevel;
    
            }
            datee = dateStr;
        } else {}
    };
    xhr.send('uID=' + userID);
}

// Datepicker
flatpickr("#datepicker-button", {
    altInput: "#datepicker-input",
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    onClose: function (selectedDates, dateStr, instance) {
        // Clear out value
        var status = 0;
        vegeVal = 0;
        fruitsVal = 0;
        dairyVal = 0;
        snackVal = 0;

        vege.style.width = status * 20 + "%";
        fruits.style.width = status * 20 + "%";
        dairy.style.width = status * 20 + "%";
        snack.style.width = status * 20 + "%";
        vegetext.innerHTML = 'Today: ' + status + '/5 Servings';
        fruitstext.innerHTML = 'Today: ' + status + '/5 Servings';
        dairytext.innerHTML = 'Today: ' + status + '/5 Servings';
        snacktext.innerHTML = 'Today: ' + status + '/5 Servings';

        // Send an AJAX request to a PHP script to fetch the data
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../backends/ajax_fetch.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200 && xhr.responseText) {
                // Parse the JSON response and update the progress bars
                var response = JSON.parse(xhr.responseText);
                document.getElementById("datepicker-show").innerHTML = dateStr;

                // Iterate through each object in the response array update the progress bar 
                for (var i = 0; i < response.length; i++) {
                    var status = parseInt(response[i].status);
                    var goals_ID = parseInt(response[i].goals_ID);

                    if (goals_ID == 1) {
                        status >= 6 ? vege.style.width = 100 + "%" : vege.style.width = status * 20 + "%";
                        vegetext.innerHTML = 'Today: ' + status + '/5 Servings';
                        vegeVal = status;
                    } else if (goals_ID == 2) {
                        status >= 6 ? fruits.style.width = 100 + "%" : fruits.style.width = status * 20 + "%";
                        fruitstext.innerHTML = 'Today: ' + status + '/5 Servings';
                        fruitsVal = status;
                    } else if (goals_ID == 3) {
                        status >= 6 ? dairy.style.width = 100 + "%" : dairy.style.width = status * 20 + "%";
                        dairytext.innerHTML = 'Today: ' + status + '/5 Servings';
                        dairyVal = status;
                    } else if (goals_ID == 4) {
                        status >= 6 ? snack.style.width = 100 + "%" : snack.style.width = status * 20 + "%";
                        snacktext.innerHTML = 'Today: ' + status + '/5 Servings';
                        snackVal = status;
                    }
                }
                datee = dateStr;
            } else {}
        };
        xhr.send('date=' + dateStr);
    }
});



// Save button
document.getElementById("saveBtn").addEventListener("click", function(){

    var data = {};
    data.vegeVal = vegeVal;
    data.fruitsVal = fruitsVal;
    data.dairyVal = dairyVal;
    data.snackVal = snackVal;
    data.uID = userID;
    data.datee = datee;

    $.ajax({
        type: 'POST',
        url: 'save.php',
        data: data,
        success: function(response) {
            save.classList.toggle("invisible");
            setTimeout(function(){
                save.classList.toggle("invisible");
            }, 3000);
            updatelevel();
        }
    });
});

window.onload= function(){
    updatelevel();
}