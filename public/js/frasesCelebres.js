function traerFrase () {
  var urlXML = 'traeFrase.php'

  fetch(urlXML)
    .then(function (respuesta) {
      return respuesta.json()
    })
    .then(function (data) {
      document.getElementById('frase').innerHTML = data.frase
      document.getElementById('autor').innerHTML = data.autor
    })
    .catch(function(error) {
        Error(error)
    })
}
