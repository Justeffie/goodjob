window.onload = function() {
  let boton = document.getElementById('switch');
  let link = document.querySelector('link')

  boton.onclick = function() {
    let light = '/css/iniciostyle.css'
    let dark = '/css/darkthemes/darkiniciostyle.css'

    if (link.getAttribute('href') === light) {
      boton.innerText = 'Modo Blanco'
      document.cookie = "switch=dark"
      link.setAttribute('href', dark)

    } else {
      boton.innerText= 'Modo Oscuro'
      document.cookie = "switch=light"
      link.setAttribute('href', light)
    }
  }


}
