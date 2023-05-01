import { dateTime } from "./components/dateTime/dateTime.js";
import { createCalendar } from "./components/calendar/calendar.js";

const GET_DATA_TIME = (a) => dateTime(a);
const GET_CALENDAR = (a) => createCalendar(a);

// setInterval(GET_DATA_TIME("IDDateTime"), 250);



// const btn = document.querySelector('#calenderBtn')
calenderBtn.addEventListener("click", function (){
    GET_CALENDAR("calenderBtn");
});

// const btn1 = document.querySelector('#dateTimeBtn')
dateTimeBtn.addEventListener("click", function (){
    GET_DATA_TIME("dateTimeBtn");
});
