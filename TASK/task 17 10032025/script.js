//document.getElementById("id1").innerHTML="Hello JS";
//document.getElementsByClassName("class").style.fontSize = "24px";
//document.getElementsByTagName("p").style.color = "powderblue";
document.getElementById("id1").innerHTML = "Hello JS";

document.querySelector(".class").style.fontSize = "25%";

document.querySelectorAll("p").forEach(element => {
    element.style.color = "powderblue";
});
