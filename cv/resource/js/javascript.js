var questionNom = prompt('Votre nom.');
var questionPrenom = prompt('Votre prénom.');

var nom = questionNom.toLowerCase();
var prenom = questionPrenom.toLowerCase();

if (nom == 'belvoix') {
  alert('ok');
}
else {
  alert('Les informations entrer ne sont pas référencer, le site ne s\'affichera pas comme il faut');
}
