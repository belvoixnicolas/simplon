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
