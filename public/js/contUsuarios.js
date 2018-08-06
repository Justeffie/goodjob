var xmlhttp= new XMLHttpRequest();

xmlhttp.onreadystatechange = function(){
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      console.log(xmlhttp.responseText);
      var cantidadUsuarios = xmlhttp.responseText;
      var cantUser= .document.getElementById('id');
      
  }
};
xmlhttp.open("GET","http://127.0.0.1:8000/api/cantidadUsuario",true)
xmlhttp.send();
