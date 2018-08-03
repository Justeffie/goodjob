window.onload= function(){
    var form= document.getElementById('formulario');


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

    document.getElementById('email').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('emailOK');

        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

        if (emailRegex.test(campo.value)) {
          valido.innerText = "válido";
        } else {
          valido.innerText = "incorrecto";
        }
    });


    for (element of elementosDelFormulario){

      element.addEventListener('blur', function() {

        if(this.value==''){

          this.style.borderColor="red";
          this.placeholder= 'Campo obligatorio';

        }

        else{
          this.style.borderColor="green";
        }


      })
    }


    form.onsubmit= function(event){


          for (element of elementosDelFormulario){

            element.addEventListener('blur', function() {

              if(this.value==''){

                this.style.borderColor="red";
                this.placeholder= 'Campo obligatorio';

              }

              else{
                this.style.borderColor="green";
              }


            })
          }

    }

  }
