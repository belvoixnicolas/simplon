function connect() {
  var connect = document.getElementById('connect');
  var img = document.getElementById('img');

  if (connect.style.display == "none") {
    img.style.borderRadius = "20px";
    img.style.filter = "saturate(200%)";
    connect.style.display = "block";
  } else {
    img.style.borderRadius = "100%";
    img.style.filter = "saturate(0%)";
    connect.style.display = "none";
  }
}

function ident() {
  var mdp = document.getElementById('mdp');
  if (mdp.value == '23e3k23e3k') {
    var ident = ['Belvoix', 'Nicolas', '57 Rue Voltaire', 'Charleville-Mézières (08000)', '07.82.02.13.27', 'belvoixnicolas1997@gmail.com'];
    document.getElementById('nom_prenom').innerHTML = ident[0] + ' ' + ident[1];
    document.getElementById('corp').style.display ='block';
    document.getElementById('contenu').style.display ='block';
    document.getElementById('lieu').innerHTML = ident[2] + ' ' + ident[3];
    document.getElementById('tel').innerHTML = ident[4];
    document.getElementById('mail').innerHTML = ident[5];
    document.getElementById('truc').style.display = 'none';
  }
  else {
    document.getElementById('corp').style.display = 'none';
    document.getElementById('mdp').style.border = '1px solid #BFAA8F';
    document.getElementById('mdp').style.boxShadow = 'inset 0px 0px 1px 1px #DF9F9F';
    document.getElementById('mdp').style.background = 'hsl(0, 39%, 95%)'
  }
}

document.getElementById('contenu').style.display ='none';
