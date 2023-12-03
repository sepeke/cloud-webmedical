/*	JavaScript 6th edition
*	Assignment 7
*	Project

*	PA Sales
*	Variables and Function
*	Author: SG Ramselela
*	Date:	26 September 2017

*	Filename: tt.js
*/

var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

var staffMeetings = ["1st Meeting", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
   "2nd Meeting", "", "", "", "", "", "", "", "", "",
   "3rd Meeting", "", "", "", "4th Meetting", ""];

//function to put the daysOfWeek values in the table header row cells
function addColumnHeaders() {
	var i = 0;
	while (i < 7) {
	document.getElementsByTagName("th")[i].innerHTML = daysOfWeek[i];
	i++;
	}
}


//function to place day of month value within eachtable data cell
function addCalendarDates () {
	var i = 1;
	var paragraphs= " ";
	do {
		var tableCell = document.getElementById("08-" + i);
		paragraphs = tableCell.getElementsByTagName("p");
		paragraphs[0].innerHTML = i;
		i++
	}
	while (i <= 31);
}

function addMeetingsToDays() {
	var paragraphs = "";
	for (i = 0; i < 31; i++) {
		var date = i+1;
		var tableCell = document.getElementById("08-" + date);
		paragraphs = tableCell.getElementsByTagName("p");
		paragraphs[1].innerHTML += staffMeetings[i];
	}
}

//function that populates calendar
function setUpPage() {
	addColumnHeaders();
	addCalendarDates();
	addMeetingsToDays();
}

//runs addColumnHeaders() function when the page loads 
window.addEventListener("load", setUpPage, true);