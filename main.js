document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const pwd = document.getElementsByID('pwd')[0].value;
    const cpwd = document.getElementsByID('cpwd')[0].value;
    if (pwd !== cpwd) {
      alert('Email or Phone number does not match!');
      event.preventDefault(); // Prevent form submission
  }
  });
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }