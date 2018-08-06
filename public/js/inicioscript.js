window.onload = function() {
  let boton = document.getElementById('switch');
  let boton2 = document.getElementById('switch2');
  let link = document.querySelector('link')
  let light = '/css/iniciostyle.css'
  let dark = '/css/darkthemes/darkiniciostyle.css'

  if (link.getAttribute('href') === light) {
    boton2.innerText = 'Modo Oscuro'
    boton.innerText = 'Modo Oscuro'
  } else {
    boton2.innerText= 'Modo Claro'
    boton.innerText= 'Modo Claro'
  }

  boton.onclick = function() {
    if (link.getAttribute('href') === light) {
      boton.innerText = 'Modo Claro'
      document.cookie = "switch=dark"
      link.setAttribute('href', dark)

    } else {
      boton.innerText= 'Modo Oscuro'
      document.cookie = "switch=light"
      link.setAttribute('href', light)
    }
  }
boton2.onclick = function() {
  if (link.getAttribute('href') === light) {
    boton2.innerText = 'Modo Claro'
    document.cookie = "switch=dark"
    link.setAttribute('href', dark)

  } else {
    boton2.innerText= 'Modo Oscuro'
    document.cookie = "switch=light"
    link.setAttribute('href', light)
  }
}

}
