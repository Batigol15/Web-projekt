function changeColor()
{
    var element=document.getElementById("content");
    element.style.color="white";
    element.style.background="black";
    
}

function changeFont()
{
    var element=document.getElementById("content");
    element.style.fontFamily="Sans";
    element.style.fontSize="14pt";
    element.style.textAlign="left";

}


function myFunction() {
    var povratak=document.getElementById("submitBtn");
    povratak.addEventListener("click", myFunction);
    window.location.href="index.php";
}
