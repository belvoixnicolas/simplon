var questionNom = prompt('Votre nom.');
var questionPrenom = prompt('Votre prénom.');

var nom = questionNom.toLowerCase();
var prenom = questionPrenom.toLowerCase();

if (nom == 'belvoix' && prenom == 'nicolas') {
  var ident = ['Belvoix', 'Nicolas', '57 Rue Voltaire', 'Charleville-Mézières (08000)', '07.82.02.13.27', 'belvoixnicolas1997@gmail.com'];
  alert(ident[0] + ' ' + ident[1]);
  document.getElementById('nom_prenom').innerHTML = ident[0] + ' ' + ident[1];
  document.getElementById('lieu').innerHTML = ident[2] + '<br/>' + ident[3];
  document.getElementById('tel').innerHTML = ident[4];
  document.getElementById('mail').innerHTML = ident[5];
}
else {
  alert('Les informations entrer ne sont pas référencer, le site ne s\'affichera pas comme il faut');
}
