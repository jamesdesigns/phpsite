// JavaScript for Menu 
/*jslint browser:true */
"use strict";

// var myMenu = document.querySelectorAll("ul#mainmenu li a");
var myMenu = document.querySelectorAll("nav#myTopnav a");
console.log(myMenu);

var selectPage = "book.php";

var i;
for(i=0; i < myMenu.length; i++) {
    var myPage = myMenu[i].getAttribute("href");
    console.log(myPage);

    if (selectPage === myPage) {
        myMenu[i].parentNode.className="active";
        myMenu[i].parentNode.parentNode.parentNode.className="parent";
    } else {
        myMenu[i].parentNode.className="";
    }
}