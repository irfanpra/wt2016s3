// JavaScript Document

var index = 
[
'+387'
]
function myFunction(){
    var regImePrezime = /\w\w\w+\s\w\w\w+/;
    var regEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var testAll = true;
    
    if(!regImePrezime.test(document.getElementById("name").value))
    {
        document.getElementById("name_error").innerHTML = "<pre>   Ime i prezime moraju sadržavati bar po tri znaka sa razmakom između</pre>";
        testAll = false;  
    }
    else document.getElementById("name_error").innerHTML = '';

    if(!regEmail.test(document.getElementById("email").value))
    {
        document.getElementById("email_error").innerHTML = "<pre>   Nevalidna email adresa!</pre>";
        testAll = false;
    }
    else document.getElementById("email_error").innerHTML = '';

    if(document.getElementById("input").value.length < 15)
    {
        document.getElementById("text_error").innerHTML = "<pre>   Poruka mora imati preko 15 karaktera</pre>";
        testAll = false;
    }
    else document.getElementById("text_error").innerHTML = '';

    return testAll;
};



function Kod(){
   var dropdown1 = document.getElementById('myDropdown');
   var textbox = document.getElementById('txtbox');
   if(dropdown1.selectedIndex == 0){
     textbox.value = "hi";
   } else if(dropdown1.selectedIndex == 1) {
     textbox.value = "bye";
   }
   }
$("#myDropdown").change(function () {
    var selectedValue = $(this).val();
    $("#txtBox").val($(this).find("option:selected").attr("value"))
});