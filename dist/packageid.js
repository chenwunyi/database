function search() {


  let pkid = document.getElementById("pkid").value;

  alert(pkid);

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tbody").innerHTML = this.responseText;
    }
  };
  alert("2" + pkid);

  xmlhttp.open("GET", "packageid.php?q=" + pkid, true);
  xmlhttp.send();

}
