// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
//   'use strict'

//   window.addEventListener('load', function () {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation')

//     // Loop over them and prevent submission
//     Array.prototype.filter.call(forms, function (form) {
//       form.addEventListener('submit', function (event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault()
//           event.stopPropagation()
//         }

//         form.classList.add('was-validated')
//       }, false)
//     })
//   }, false)
// })()
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')
    var cantidad = document.getElementById("cantidad");
    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        event.preventDefault()

        if (form.checkValidity() === false) {
          event.stopPropagation()
        } else {
          
          // alert(cantidad.innerText)
          // alert(cantidad.textContent)
               if(cantidad.textContent === "" ){
                  swal({title:"No hay productos", type: "error"});
                } else {
                  swal({title:"Compra exitosa", type: "succes"}); 
                }
        }

        form.classList.add('was-validated')
      }, false)
    })
  }, false)
})()
