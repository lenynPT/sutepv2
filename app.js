let boton = document.querySelectorAll('.option'); //selecciono el boton

console.log(boton);
// boton.forEach.addEventListener('click',function(e){
//     console.log('click');
//     console.log(this);
//     const page = boton.getAttribute('page') // obtengo el nombre del form
//     const form = document.getElementById(page); //selecciono el form 
//     form.submit(); // envio los datos al archivo index con los datos
//     e.preventDefault(); // prueba
// })

boton.forEach(function(element){
    console.log(element)
    element.addEventListener('click',function(e){
        console.log('click');
        e.preventDefault();
        const page = this.getAttribute('page');
        console.log(page);
        const form = document.getElementById(page);
        console.log(form);
        form.submit()
    })
})