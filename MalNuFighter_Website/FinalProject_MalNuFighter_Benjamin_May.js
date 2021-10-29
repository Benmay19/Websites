// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    /*if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("header").style.fontSize = "12px";
    } else {
        document.getElementById("header").style.fontSize = "25px";
    } */
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("logo").style.width = "175px";
    } else {
        document.getElementById("logo").style.width = "330px";
    }
    // Menu Switch???
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("hideMenu").classList.add("hide");
    }
    else {
        document.getElementById("hideMenu").classList.remove("hide");
    }
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("hideButton").classList.remove("hide");
    }
    else {
        document.getElementById("hideButton").classList.add("hide");
    }
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
};

/* Photo slide show container */
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
/* End of photo slide show container */

/* BUILT BUT NOT USED IN FINAL PROJECT */
/* FORM VALIDATION */
/* function checkForm() {
    var areFormErrors = false;
    var errorMessages = "";

    errorMessages += "<ul>";

    // Check full name exists
    var fullNameElement = document.getElementById("fullName");
    if ( fullNameElement.value.length === 0 ) {
        errorMessages += "<li>Missing full name.</li>";
        fullNameElement.classList.add("error");
        areFormErrors = true;
    }
    else {
        fullNameElement.classList.remove("error");
    }

    // Check email matches regular expression
    var emailElement = document.getElementById("email");
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
    if ( emailElement.value.length === 0 || !emailPattern.test(emailElement.value) ) {
        errorMessages += "<li>Invalid or missing email address.</li>";
        emailElement.classList.add("error");
        areFormErrors = true;
    }
    else {
        emailElement.classList.remove("error");
    }

    errorMessages += "</ul>";

    // If errors, display error messages
    if ( areFormErrors ) {
        document.getElementById("formErrors").innerHTML = errorMessages;
        document.getElementById("formErrors").style.display = "block";
    }
    // If no errors, hide error messages div
    else {
        document.getElementById("formErrors").style.display = "none";
    }
}


document.getElementById("submit").addEventListener("click", function (event) {
    checkForm();

    // Prevent default form action. DO NOT REMOVE THIS LINE
    event.preventDefault();
}); */
