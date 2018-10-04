function traerFrase () {
  var requerimientoXML = new XMLHttpRequest()
  var respuesta

  requerimientoXML.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      respuesta = JSON.parse(requerimientoXML.responseText)
      document.getElementById('frase').innerHTML = respuesta.frase
      document.getElementById('autor').innerHTML = respuesta.autor
    }
  }

  var urlXML = 'traeFrase.php'
  requerimientoXML.open('GET', urlXML, true)
  requerimientoXML.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
  requerimientoXML.send()
}
