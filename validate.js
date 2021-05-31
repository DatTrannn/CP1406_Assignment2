function validateForm() {
    let name = document.forms["myForm"]["fname"].value;
    let zipcode = document.forms["myForm"]["zipcode"].value;
    let email = document.forms["myForm"]["email"].value;
    if (name == "") {
        alert("First name must be filled out");
        return false;
    }
    if (zipcode == "") {
        alert("Zip code must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
} 

function validateForm1() {
    let email = document.forms["myForm1"]["email"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
} 

function showMenu(){
    var nav_links = document.getElementById("nav_links");
    nav_links.style.right = "0";
}
function hideMenu(){
    var nav_links = document.getElementById("nav_links");
    nav_links.style.right = "-200px";
}
function sayThanks() {
    document.getElementById("thanks").innerHTML = "Your message";
}