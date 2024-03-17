/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn1");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

function RaceWays() {
    document.getElementById("RaceWays").style.display = "block";
}
var fish = document.getElementById("fish");
if (fish) {
    document.getElementById("fish").onclick = function () {
        var selectedOption = this.value;
        if (selectedOption == "trout") {
            document.getElementById("raceways").style.display = "block";
        } else {
            document.getElementById("raceways").style.display = "none";
        }
        if (selectedOption == "Other") {
            document.getElementById("Other_fields").style.display = "block";
        } else {
            
            document.getElementById("Other_fields").style.display = "none";
        }
    }
}
var Marital_Status = document.getElementById("Marital_Status");
if (Marital_Status) {
    document.getElementById("Marital_Status").onclick = function () {
        var selectedOption = this.value;
        if (selectedOption == "Married") {
            document.getElementById("married").style.display = "block";
        } else {
            document.getElementById("married").style.display = "none";
        }
    }
}
var typeoffish = document.getElementById("typeoffish");
if (typeoffish) {
    document.getElementById("typeoffish").onclick = function () {
        var selectedOption = this.value;
        if (selectedOption == "Other") {
            document.getElementById("othertype").style.display = "block";
        } else {
            document.getElementById("othertype").style.display = "none";
        }
    }
}