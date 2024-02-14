/*setting minimum dates for check-in and check-out fields dynamically*/

var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10){
    date = '0' + date;
}

if(month < 10){
    month = '0' + month;
}

var dateTomorrow = year + "-" +month+"-"+ date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min",dateTomorrow);

checkinElem.onchange = function() {
    checkoutElem.setAttribute("min",this.value);
}

/*opening and closing booking form*/

// function openForm(){
//     const btnOpen = document.querySelector('.js-display');
//     if(btnOpen.classList.contains('hideform')){
//         btnOpen.classList.remove('hideform');
//         document.body.style.overflow = "hidden";
//     }

// }
// function closeform(){
//     const btnClose = document.querySelector('.js-display');
//     if(!btnClose.classList.contains('hideform')){
//         btnClose.classList.add('hideform');
//         document.body.style.overflow = "scroll";
//     }
// }


