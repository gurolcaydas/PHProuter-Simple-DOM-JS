

function leftDiv() {
    document.getElementById("leftDiv").innerHTML =
    "<div class='d-flex align-items-center p-2 justify-content-center'><span><div class='spinner-border ms-auto' role='status' aria-hidden='true'></div></span></div>";

    fetch("/subs/leftDiv.php?")
      .then((response) => response.text())
      .then((responseText) => (document.getElementById("leftDiv").innerHTML = responseText))
      .catch((error) => console.error(error));
}
function rightDiv() {
    document.getElementById("rightDiv").innerHTML =
    "<div class='d-flex align-items-center p-2 justify-content-center'><span><div class='spinner-border ms-auto' role='status' aria-hidden='true'></div></span></div>";

    fetch("/subs/rightDiv.php?")
      .then((response) => response.text())
      .then((responseText) => (document.getElementById("rightDiv").innerHTML = responseText))
      .catch((error) => console.error(error));

}