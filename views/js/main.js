var success_popup=document.getElementById("success");
var error_popup =document.getElementById("error");
var s_close=document.getElementById("s_button");
var e_close=document.getElementById("e_button");
var s_btn =document.getElementById("success_trigger");
var e_btn=document.getElementById("error_trigger");
s_btn.onclick=function(){
    success_popup.style.display ="block";
    console.log("funcion1");
    console.log("funcion1");
    console.log("funcion1");
    console.log("funcion1");
    alert("Hello! I am an alert box!!");
}
e_btn.onclick =function(){
    error_popup.style.display="block";
}
s_close.onclick =function(){
    success_popup.style.display="none";
    console.log("funcion2");
    console.log("funcion2");
    console.log("funcion2");
    console.log("funcion2");
    console.log("funcion2");
    alert("Hello! I am an alert box!!");
}
e_close.onclick=function(){
    error_popup.style.display="none";
}