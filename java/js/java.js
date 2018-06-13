// EXO 2 //
/*var firstNam = prompt('Votre prénom');

alert('Bonjour ' + firstNam + '.');*/

// EXO 3 //
/*var prixHt = parseFloat(prompt('Prix HT'));

var prixTtc = prixHt + (prixHt / 100 * 20);

alert(prixTtc);*/

// EXO 4 //
/*var temperatureC = parseFloat(prompt('Température on °c'));
var temperatureF = 32 + (temperatureC * 1.8);

alert(temperatureF + '°F');*/

// EXO 5 //
/*var monDiv = document.getElementsByTagName('div')[0];

console.log(monDiv);

monDiv.id = 'test';

console.log(monDiv);

monDiv.className = 'maClasse';

console.log(monDiv);*/

// EXO 6 //
/*var div = document.getElementsByTagName('div');
console.log(div);
div[0].id = "truc";

for (var i = 0; i < div.length; i++) {
  div[i].style.color = 'pink';
  div[i].style.textAlign = 'center';
}

var textUn = div[0].innerHTML;
var textDeux = div[1].innerHTML;

div[0].innerHTML = textDeux;
div[1].innerHTML = textUn;

div[0].style.textAlign = 'left';
div[1].style.textAlign = 'right';*/

// EXO 7 //
/*var mesDiv = document.getElementsByTagName('div');

mesDiv[0].style.background = 'red';
mesDiv[1].style.background = 'green';
mesDiv[2].style.background = 'blue';

document.getElementsByTagName('body')[0].style.display = 'flex';*/

// EXO 8 //
/*function src() {
  console.log(document.getElementsByTagName('img')[0].src);
}

function img() {
  function test() {
      truc++;
      lien.style = 'transform: rotate(' + truc + 'deg);';

      if (truc == 180) {
        if (lien.src == 'http://localhost/simplon/java/img/img.jpg') {
          lien.src = 'http://localhost/simplon/java/img/img2.jpg';
          src();
        }
        else {
          lien.src = 'http://localhost/simplon/java/img/img.jpg';
          src();
        }
      }
      else if (truc == 360) {
        clearInterval(trucDeux);
        lien.style = 'transform: rotate(0deg);';
      }
  }

  var lien = document.getElementsByTagName('img')[0];

  var truc = 0;
  var trucDeux = setInterval(test, 10);
}

var rota = 0;

src();*/

// EXO 9 //
var textH1 = document.querySelector("h1").innerText;

document.querySelector("h1").innerHTML = '<span>' + textH1 + '</span>';

document.querySelector("span").onmouseenter = function(){
	this.style.color = "red";
};

document.querySelector("span").onmouseout = function(){
  this.style.color = "black";
};

var i = 0;
var defaut = document.querySelector("span").innerHTML;
document.querySelector("span").onclick = function(){var machin = setInterval(function(){
  i++;
  document.querySelector("span").innerHTML = 'J\'me casse!';
  document.querySelector('h1').style.marginLeft = i + 'px';
  if (i == window.innerWidth) {
    clearInterval(machin);
    i = 0;
    document.querySelector('span').innerHTML = defaut;
    document.querySelector('h1').style.marginLeft = '0px';
  }
}, 100)};
