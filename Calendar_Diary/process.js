
/* Selecting the variables for the content divs and the days */
var content = document.querySelectorAll(".content");
var today = document.querySelector(".days.today");

/* Setting today's date as the correct index and showing the diary entry for today */
num = $(today).text()
num = parseInt(num)
num = num - 1
$(content[num]).addClass("active")



$('.days').click(function(){
    $('.content.active').removeClass("active")
    day = $(this).text()
    day = parseInt(day)
    day = day - 1
    $(content[day]).addClass("active")
    
  });

