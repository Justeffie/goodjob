document.getElementById('email').addEventListener('input', function () {
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
    });

