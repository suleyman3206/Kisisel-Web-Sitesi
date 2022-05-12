//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// reset form
function resetForm(){
  document.getElementById("form4Example1").innerHTML=""; 
  document.getElementById("form4Example2").innerHTML="";
  document.getElementById("form4Example3").innerHTML="";
  }

// submit form
const submitBtn = document.getElementById('submit-btn');

const validate = (e) => {
  e.preventDefault();
  const username = document.getElementById('form4Example1');
  const emailAddress = document.getElementById('form4Example2');
  const message =  document.getElementById('form4Example3');

  var adSoyad = document.getElementById('form4Example1').value;
  var email = document.getElementById('form4Example2').value;
  var mesaj =  document.getElementById('form4Example3').value;

  if (username.value === "") {
    alert("Adınızı giriniz.");
    username.focus();
    return false;
  }
  
  if (emailAddress.value === "") {
    alert("Mail adresinizi giriniz");
    emailAddress.focus();
    return false;
  }

  if (!emailIsValid(emailAddress.value)) {
    alert("Geçerli bir mail adresi giriniz");
    emailAddress.focus();
    return false;
  }
  if (message.value === "") {
    alert("Mesajınızı giriniz.");
    message.focus();
    return false;
  }
  
  document.write("<h1>Teşekküler! Bilgileriniz gönderilmek üzere kaydedildi.</h1>");
  document.write("Bilgileriniz şu şekilde: <br>");
  document.write("Ad Soyad: "+ adSoyad + "<br>");
  document.write("Email: "+ email + "<br>");
  document.write("Mesaj: " + mesaj + "<br>");
  return true; 
}

const emailIsValid = email => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

submitBtn.addEventListener('click', validate);