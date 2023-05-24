const Boton = document.querySelector('#detalle');
const contenido = document.querySelector('#contenido');

Boton.addEventListener("click", function(){
    console.log('hola');
   let template = ``;
   let frm = document.createElement('form');
   frm.setAttribute('class','row')
   template=`<div class="row">
   <div class="col-2">
      <label for="exampleFormControlInput1" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="">
   </div>
       <div class="col-2">
         <label for="exampleFormControlInput1" class="form-label">valor</label>
         <input type="text" class="form-control" id="valor" placeholder="">
       </div>
       <div class="col-2">
         <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
         <input type="text" class="form-control" id="cantidad" placeholder="">
       </div>
       <div class="col-2">
         <label for="exampleFormControlInput1" class="form-label">total</label>
         <input type="text" class="form-control" id="total" placeholder="">
       </div>
       <div class="col-2"><br>
       <button type="button" class="btn btn-outline-success">+</button>
       </div>
       <div class="col-2"><br>
       <button type="button" class="btn btn-outline-danger">-</button>
       </div>
 </div>`;
 frm.innerHTML=template;
 contenido.appendChild(frm);
  

//verifico si el elemento esta oculto

});
