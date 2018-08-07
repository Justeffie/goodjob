window.onload = function() {

  var form = document.getElementById('formulario');

  form.addEventListener('submit', function(ev){

    ev.preventDefault();
    console.log('submit prevent def')
    let email = document.getElementById('email');

    fetch(`http://localhost:8000/api/verificarusuario/${email.value}`)
      .then(function(res){
        return res.json()
      }).then( function(data){

          const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
          let respuesta = 'El usuario no existe';

          if (emailRegex.test(email.value)) {
              console.log('regex')
              if (data > 0) {
                console.log('data')
                respuesta='El usuario existe';
                form.submit();
              } else {
                console.log('data else')
              }
            document.getElementById('errormail').innerText = respuesta;
          } else {
            console.log('regex else')
            respuesta= 'El formato del mail no es valido';
            document.getElementById('errormail').innerText = respuesta;
          }

      }).catch(function(err){
        console.log(err)
      });

  });
}
