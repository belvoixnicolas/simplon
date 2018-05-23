function valid () {
  var mm = document.getElementById('mm').checked;
  var mr = document.getElementById('mr').checked;
  var prenom = document.getElementById('prenom').value;
  var nom = document.getElementById('nom').value;

  if (mm == true || mr == true) {
    var titre = true;
  }
  else {
    var titre = false;
  }

  if (titre == false || prenom == "" || nom == ""){
    var erreur = 'Les élèments suivent ne fonctionnent pas: \n';

    if (titre == false) {
      erreur = erreur + 'Le genre.\n';
    }

    if (prenom == "") {
      erreur = erreur + 'Le prenom.\n';
    }

    if (nom == "") {
      erreur = erreur + 'Il manque le nom.';
    }

    alert(erreur);
    }
  }
