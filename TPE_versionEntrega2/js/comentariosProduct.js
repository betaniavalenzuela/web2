"use strict"

const API_URL = "api/comentarios";
getComentarios();

let formulario = document.querySelector("#formAdd");
formulario.addEventListener('submit', agregarComentario);

async function getComentarios() {
  let id = document.getElementById("id_producto").value; 

  try{
    let res = await fetch(API_URL + "/producto/" + id);
    if (res.status == 200) {
      let comentarios = await res.json();
      render(comentarios);
    } else {
      console.log("no es 200");
    }
  }catch (e) {
    console.log(e);
  }
}

function render(comentarios) {
  let container = document.querySelector('#div-comentarios');
  let admin = document.getElementById("is_admin").value;
  
  container.innerHTML = ' ';

  for (let coment of comentarios) {
    let divContainer = document.createElement("div");
    let divPuntaje = document.createElement("h4");
    let divComentario = document.createElement("div");
    let user = document.createElement("h5");

    user.innerHTML = coment.nombre_usuario + " comentó: ";
    divPuntaje.innerHTML = "Puntaje: " + coment.puntaje;

    divComentario.appendChild(user);
    divComentario.innerHTML += coment.comentario;
    divContainer.appendChild(divPuntaje);
    divContainer.appendChild(divComentario);
    container.appendChild(divContainer);

    if (admin) {
      let id = coment.id_comentario;
      let deleteButton = document.createElement("button");
      deleteButton.innerHTML = "Borrar"
      divContainer.appendChild(deleteButton);
      deleteButton.addEventListener("click", () => borrarComentario(id));
    }
  }
}

async function borrarComentario(id){
  console.log("se toco el boton con id " + id);
  try{
    let res = await
      fetch(API_URL + "/" + id, {
        "method": "DELETE",
      });
    if (res.status == 200) {
      getComentarios();
    }
    let json = await res.json();
    console.log(json);
  }catch (error) {
    console.log(error);
  }
}

async function agregarComentario(e){
  e.preventDefault();
  
  // Tomo los input radio del formulario
  let radios = document.getElementsByName("puntaje");
  // Asigno una variable vacía
  let puntaje;
  // Recorro todos los input radio
  for (let i=0; i<radios.length; i++){
    // Me detengo en aquel que esté checked
    if (radios[i].checked){
      // A la variable declarada antes del for le asigno el valor del radio seleccionado
      puntaje = radios[i].value;
    }
  }  
  
  let comentario = {
    "id_usuario":document.getElementById("id_user").value,
    "id_producto": document.getElementById("id_producto").value,
    "comentario": document.getElementById("comentario").value,
    "puntaje": puntaje  
  }

  try{
    let res = await fetch(API_URL, {
        "method": "POST",
        "headers": { "Content-type": "application/json" },
        "body": JSON.stringify(comentario)
    });
    if(res.status==200){
      console.log("creado");
      getComentarios();  
      document.querySelector("#formAdd").reset();              
    }    
    let json = await res.json();
    console.log(json);
  }catch (error){
    console.log(error);
  } 
}

