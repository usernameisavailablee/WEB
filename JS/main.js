import { dateTime } from "./components/dateTime/dateTime.js";
import { Calendar } from "./components/calendar/calendar.js";

let flagcalendar = 0;
const calendarBtn = document.getElementById("calendarBtn");
const calendarContainer = document.getElementById("calendar");
const formCount = document.getElementById("formCount");

calendarBtn.addEventListener("click", () => {
    if (flagcalendar == 0) {
        const calendar = new Calendar(calendarContainer);
        calendar.render();
        flagcalendar += 1;
    } else {
        calendarContainer.innerHTML = "";
        flagcalendar -= 1;
    }
});

const GET_DATA_TIME = (a) => dateTime(a);
const dateTimeBtn = document.getElementById("dateTimeBtn");
dateTimeBtn.addEventListener("click", () => {
    GET_DATA_TIME("dateTimeBtn");
});

//3
const formCountBtn = document.getElementById("formCountBtn");
formCountBtn.addEventListener("click", () => {
    const forms = document.querySelectorAll("form");
    formCount.textContent = `Количество форм: ${forms.length}`;
});

//4
function animateBlock() {
    const myBlock = document.getElementById("myBlock");
    myBlock.classList.add("animate");

    setTimeout(() => {
        myBlock.classList.remove("animate");
    }, 500);
}

setInterval(animateBlock, 1000); // Выполняем анимацию каждую секунду

//5
function addListItem() {
    const content = prompt("Введите содержимое пункта списка:");
    if (content) {
        const listItem = document.createElement("li");
        listItem.textContent = content;
        listContainer.appendChild(listItem);
    }
}

function removeListItem() {
    const listItems = listContainer.getElementsByTagName("li");
    if (listItems.length === 0) {
        alert("Список пуст.");
        return;
    }
    const lastItem = listItems[listItems.length - 1];
    const confirmDelete = confirm(`Вы уверены, что хотите удалить пункт списка "${lastItem.textContent}"?`);
    if (confirmDelete) {
        listContainer.removeChild(lastItem);
        alert(`Пункт списка "${lastItem.textContent}" удален.`);
    }
}

function addTableRow() {
    const row = document.createElement("tr");
    const cells = prompt("Введите содержимое ячеек таблицы (через запятую):");
    if (cells) {
        const cellValues = cells.split(",");
        cellValues.forEach((value) => {
            const cell = document.createElement("td");
            cell.textContent = value.trim();
            row.appendChild(cell);
        });
        tableBody.appendChild(row);
    }
}

function removeTableRow() {
    const rows = tableBody.getElementsByTagName("tr");
    if (rows.length === 0) {
        alert("Таблица пуста.");
        return;
    }
    const lastRow = rows[rows.length - 1];
    const confirmDelete = confirm("Вы уверены, что хотите удалить последнюю строку таблицы?");
    if (confirmDelete) {
        tableBody.removeChild(lastRow);
        alert("Последняя строка таблицы удалена.");
    }
}

const addListBtn = document.getElementById("addListBtn");
addListBtn.addEventListener("click", addListItem);

const removeListBtn = document.getElementById("removeListBtn");
removeListBtn.addEventListener("click", removeListItem);

const addTableBtn = document.getElementById("addTableBtn");
addTableBtn.addEventListener("click", addTableRow);

const removeTableBtn = document.getElementById("removeTableBtn");
removeTableBtn.addEventListener("click", removeTableRow);

const linkElement = document.getElementById("dateTimeBtn");

//6
linkElement.addEventListener("mouseleave", () => {
    // Изменение стилевого оформления объекта ссылка
    linkElement.style.color = "red";
    linkElement.style.fontStyle = "italic";
    linkElement.style.textDecoration = "none";
});

//7
const menuButton = document.getElementById("menuButton");
const menuList = document.getElementById("menuList");
const message = document.getElementById("message");

let isMenuOpen = false;

menuButton.addEventListener("click", () => {
    if (isMenuOpen) {
        menuList.style.display = "none";
    } else {
        menuList.style.display = "block";
    }

    isMenuOpen = !isMenuOpen;

    if (menuList.children.length === 0) {
        message.style.display = "block";
    }
});

menuList.addEventListener("click", (event) => {
    const listItem = event.target;
    listItem.style.transition = "opacity 0.5s";
    listItem.style.opacity = 0;

    setTimeout(() => {
        menuList.removeChild(listItem);
        if (menuList.children.length === 0) {
            message.style.display = "block";
        }
    }, 500);
});

//8

const fadeImage = document.getElementById("fadeImage");
const textBehind = document.getElementById("textBehind");

fadeImage.addEventListener("mouseenter", () => {
    fadeImage.style.opacity = "0.5";
    textBehind.style.opacity = "1";
});

fadeImage.addEventListener("mouseleave", () => {
    fadeImage.style.opacity = "1";
    textBehind.style.opacity = "0";
});

const emailInput = document.getElementById("email");

emailInput.addEventListener("input", () => {
    const email = emailInput.value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (regex.test(email)) {
        emailInput.classList.remove("invalid");
    } else {
        emailInput.classList.add("invalid");
    }
});