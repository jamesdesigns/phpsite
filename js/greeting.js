// JavaScript for Menu 
/*jslint browser:true */
"use strict";

var today = new Date();
var hourNow = today.getHours();
var greeting;

if(hourNow >= 17 && hourNow <= 24){
    greeting = 'Good Evening and welcome!';
} else if(hourNow >= 12 && hourNow <= 17){
    greeting = 'Good Afternoon and welcome!';
} else if(hourNow < 12) {
    greeting = 'Good Morning and welcome!';
} else {
    greeting = 'Welcome to Cabot Cruises!';
}

document.getElementById("userGreeting").innerHTML = greeting;