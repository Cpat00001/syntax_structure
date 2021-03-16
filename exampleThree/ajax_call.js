<script>
{/* javascript file to execute ajax call from front-page.php */}
function showOpenHours(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("showHours").innerHTML = "Empty input";
    return;
  }
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showHours").innerHTML = this.responseText;
      console.log(this.responseText + " and " + this.statusText);
    }
    console.log('fired')
  };
// xhttp.open("GET", "openhours.php?q="+str, true);
// dzialajaca linia - przynosi caly html xhttp.open("GET", "https://localhost/exampleThree/openhours/?q="+str, true)
xhttp.open("GET", "https://localhost/exampleThree/openhours/?q="+str, true)
xhttp.send();
}
</script>
