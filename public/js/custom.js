function myFunction(more) {
  var moreText = document.getElementById(more);

  if (more == "more1") {
    var dots = document.getElementById("dots1");
    var btnText = document.getElementById("myBtn1");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
    else {
      dots.style.display = "none";
      btnText.innerHTML = "Lire Moins -";
      moreText.style.display = "inline";

      var dots = document.getElementById("dots2");
      var btnText = document.getElementById("myBtn2");
      var moreText = document.getElementById("more2");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";

      var dots = document.getElementById("dots3");
      var btnText = document.getElementById("myBtn3");
      var moreText = document.getElementById("more3");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
  }
  else if (more == "more2") {
    var dots = document.getElementById("dots2");
    var btnText = document.getElementById("myBtn2");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
    else {
      dots.style.display = "none";
      btnText.innerHTML = "Lire Moins -";
      moreText.style.display = "inline";

      var dots = document.getElementById("dots1");
      var btnText = document.getElementById("myBtn1");
      var moreText = document.getElementById("more1");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";

      var dots = document.getElementById("dots3");
      var btnText = document.getElementById("myBtn3");
      var moreText = document.getElementById("more3");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
  }
  else if (more == "more3") {
    var dots = document.getElementById("dots3");
    var btnText = document.getElementById("myBtn3");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
    else {
      dots.style.display = "none";
      btnText.innerHTML = "Lire Moins -";
      moreText.style.display = "inline";

      var dots = document.getElementById("dots2");
      var btnText = document.getElementById("myBtn2");
      var moreText = document.getElementById("more2");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";

      var dots = document.getElementById("dots1");
      var btnText = document.getElementById("myBtn1");
      var moreText = document.getElementById("more1");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
  }
  // if (dots.style.display === "none") {

  //   dots.style.display = "inline";
  //   btnText.innerHTML = "Lire la suite +"; 
  //   moreText.style.display = "none";

  //       dots.style.display = "none";
  //   btnText.innerHTML = "Lire Moins -"; 
  //   moreText.style.display = "inline";

  //       dots.style.display = "none";
  //   btnText.innerHTML = "Lire Moins -"; 
  //   moreText.style.display = "inline";

  // }
  //  else {
  //   dots.style.display = "none";
  //   btnText.innerHTML = "Lire Moins -"; 
  //   moreText.style.display = "inline";
  // }
}


// var i = 0;
// var j = 0;
// function typeWriter() {
//   var txt = "Urgent Care + Multi-Specialty Medical Clinic Group";
//   var descr = "RELIABLE MEDICAL SERVICES LOCATED IN LOS ANGELES, CA";
//   if (i < txt.length) {
//     document.getElementById("textAcc").innerHTML += txt.charAt(i);
//     if (i == txt.length) {

//       i = 0;
//       document.getElementById("textAcc").innerHTML = "";
//     }
//     i++;
//   }
//   if (j < descr.length) {
//     document.getElementById("textDescr").innerHTML += descr.charAt(j);

//     if (j == descr.length) {

//       j = 0;
//       document.getElementById("textDescr").innerHTML = "";
//     }
//     j++;
//     setTimeout(typeWriter, 80);
//   }
// }

var i = 0;
var j = 0;
var cnt = 0;

function typeWriter() {

  var txt = "CENTRE DENTAIRE LARGOU TIZNIT";
  var descr = "L'UNE DES MEILLEURES CLINIQUES DENTAIRES DE TIZNIT";

  if (i < txt.length) {
    document.getElementById("textAcc").innerHTML += txt.charAt(i);
    document.getElementById("textAcc2").innerHTML += txt.charAt(i);
    i++;
  }

  if (cnt == (descr.length + 60)) {
    i = 0;
    document.getElementById("textAcc").innerHTML = "";
    document.getElementById("textAcc2").innerHTML = "";
    j = 0;
    cnt = 0;
    document.getElementById("textDescr").innerHTML = "";
    document.getElementById("textDescr2").innerHTML = "";
  }
  if (j < descr.length) {
    document.getElementById("textDescr").innerHTML += descr.charAt(j);
    document.getElementById("textDescr2").innerHTML += descr.charAt(j);
    j++;
  }
  cnt++;
  setTimeout(typeWriter, 80);
}

