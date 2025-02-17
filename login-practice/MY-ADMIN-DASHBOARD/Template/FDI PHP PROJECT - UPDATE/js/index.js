////////////////////////////////////////// side bar toggle////////////////////////////
function toggle() {
    const sidebar = document.getElementById("sidebar");
    const content = document.getElementById("content");

    // Toggle 'collapsed' class to adjust the sidebar width and content margin
    sidebar.classList.toggle("collapsed");
    content.classList.toggle("collapsed");

}
////////////////////////////////////////// Date & Time Function////////////////////////////
const clock = setInterval(function time() {
    var DATE = document.getElementById("Date");
    var TIME = document.getElementById("time");
    var year = document.getElementById("YEAR")
    var MONTH = document.getElementById("Month");

    var HOURS = document.getElementById("Hours");
    var Minutes = document.getElementById("Minutes");
    var seconds = document.getElementById("Seconds");
    var AmPm = document.getElementById("ampm");

    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
    ];
    var hours = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '01', '02', '03', '04', '05', '06', '07', '08', '9', '10', '11', '12'
    ];
    const date = new Date();
    const hr = date.getHours();
    const min = date.getMinutes();
    const sec = date.getSeconds();
    const Year = date.getFullYear();
    const month = date.getMonth();
    const DAte = date.getDate();

    MONTH.textContent = `${months[month]}`;
    DATE.innerHTML = DAte;
    year.innerHTML = Year;

    HOURS.textContent = `${hours[hr]}`;
    Minutes.textContent = min;
    seconds.textContent = sec;
    //  condition for AM and PM
    if (hr >= 1 && hr < 12) {
        AmPm.innerHTML = "AM";
    } else {
        AmPm.innerHTML = "PM";
    }

    // condition for 0 before seonds and minutes
    if (sec < 10) {
        seconds.textContent = `0${sec}`;
        Minutes.textContent = `0${min}`;
    }
    else {
        seconds.textContent = sec;
        Minutes.textContent = min;
    }
    // condition for 0 before minutes
    if (min < 10) {
        Minutes.textContent = `0${min}`;
    }
    else {
        Minutes.textContent = min;
    }
},1000);