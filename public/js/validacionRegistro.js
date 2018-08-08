/*document.getElementById('email').addEventListener('input', function () {
            campo = event.target;
            valido = document.getElementById('emailOK');

            emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

            if (emailRegex.test(campo.value)) {
                valido.innerText = "válido";
                campoValidado = true;
            } else {
                valido.innerText = "incorrecto";
                campoValidado = false;
            }
        });

    document.getElementById('formRegistro').addEventListener('submit' , function(event){
        var cantErrores=0;

        var elementosDelFormulario=[];
        var nombre =document.getElementById('name');
        elementosDelFormulario.push(nombre);
        var apellido =document.getElementById('apellido');
        elementosDelFormulario.push(apellido);
        var usuario =document.getElementById('usuario');
        elementosDelFormulario.push(usuario);
        var nacimiento =document.getElementById('nacimiento');
        elementosDelFormulario.push(nacimiento);
        var email= document.getElementById('email');
        elementosDelFormulario.push(email);
        var password= document.getElementById("password");
        elementosDelFormulario.push(password);

        for (element of elementosDelFormulario){
            if(element.value==''){
                    cantErrores++;
                element.style.borderColor="red";
                element.placeholder= 'Campo obligatorio';


            }else{
                element.style.borderColor="green";
            }
        }

        if(cantErrores > 0){
            alert("algunos de los campos estan vacios");
            event.preventDefault();
            return false;
        }
    });*/


    window.onload = function() {


      var form = document.getElementById('formRegistro');
      form.addEventListener('submit', function(ev){

      ev.preventDefault();


      var cantErrores=0;
      var elementosDelFormulario=[];
      var nombre =document.getElementById('name');
      elementosDelFormulario.push(nombre);
      var apellido =document.getElementById('apellido');
      elementosDelFormulario.push(apellido);
      var usuario =document.getElementById('usuario');
      elementosDelFormulario.push(usuario);
      var nacimiento =document.getElementById('nacimiento');
      elementosDelFormulario.push(nacimiento);
      var email= document.getElementById('email');
      elementosDelFormulario.push(email);
      var password= document.getElementById("password");
      elementosDelFormulario.push(password);


      for (element of elementosDelFormulario){
          if(element.value==''){
                  cantErrores++;
              element.style.borderColor="red";
              element.placeholder= 'Campo obligatorio';


          }else{
              element.style.borderColor="green";
          }
      }

      if(cantErrores > 0){
          alert("algunos de los campos estan vacios");
          ev.preventDefault();
        }
        else{
          console.log('submit prevent def')
          let email = document.getElementById('email');
          fetch(`http://127.0.0.1:8000/api/verificarusuario/${email.value}`)
          .then(function(res){
              return res.json()
              }).then( function(data){
                    const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                    let respuesta = 'El usuario no existe';
                    if (emailRegex.test(email.value)) {
                          console.log('regex')
                          if (data > 0) {
                          console.log('data')
                          respuesta='El Mail ya esta registrado';
                          ev.preventDefault();
                        }
                          else {
                          console.log('data else');
                          form.submit();
                          }
                          document.getElementById('errormail').innerText = respuesta;
                                                        }
                      else {
                          console.log('regex else')
                          respuesta= 'El formato del mail no es valido';
                          document.getElementById('errormail').innerText = respuesta;
                          ev.preventDefault();
                          }

          }).catch(function(err){
            console.log(err)
          });

}


});

}
