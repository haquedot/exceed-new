// function moveToNextInput(currentInput, nextInput) {
//     if (currentInput.value.length >= currentInput.maxLength) {
//         nextInput.focus();
//     }
// }
var monthInput = document.getElementById("month");
var yearInput = document.getElementById("year");
var cvvInput = document.getElementById("security");
var cardNumber = document.getElementById("cardNumber");


function updateCardNumber() {
    document.getElementById("cardNumberOut").textContent = cardNumber.value;
    if (cardNumber.value.length === 16) {
        monthInput.focus();
    }
}

function updateMonth() {
    document.getElementById("monthOut").textContent = monthInput.value;
    if (monthInput.value.length === 2) {
        yearInput.focus();
    }
}

function updateYear() {
    document.getElementById("yearOut").textContent = yearInput.value;
    if (yearInput.value.length === 4) {
        cvvInput.focus();
    }
}

function updateSecurity() {
    if (cvvInput <= 999) {
        document.getElementById("cvvOut").textContent = cvvInput;
    }
}

function updateCardLogo() {
    var selectedCard = document.getElementById("cardType").value;
    var cardLogoElement = document.getElementById("cardLogo");

    if (selectedCard === "mastercard") {
        cardLogoElement.src = "mastercard.svg";
    } else if (selectedCard === "visa") {
        cardLogoElement.src = "visa.svg";
    } else {
        cardLogoElement.src = "";
    }
}