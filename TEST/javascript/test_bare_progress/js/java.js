function plusDix() {
  var progressBar = document.getElementById('progress_bar');
  var avencement = document.getElementById('avencement');
  var valeurProgressBar = progress_bar.getAttribute('value');

  if (valeurProgressBar < 100) {
    valeurProgressBar = parseInt(valeurProgressBar) + 10;
    progress_bar.setAttribute('value', valeurProgressBar);

    if (valeurProgressBar == 100) {
      document.getElementById('bouton').style.visibility="hidden";
      avencement.innerHTML = 'Complet';
    }
    else {
        avencement.innerHTML = valeurProgressBar + ' %';
    }

  }
}
