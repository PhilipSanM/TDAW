$(document).ready(()=>{
    const validator =  new JustValidate("#loginform");
    validator.addField('#usr', [
        {
        rule: 'required',
        errorMessage:"Por favor ingresa tu usuario"
        },
        {
        rule: 'integer',
        errorMessage:"Deben ser solo números"
        },
        {
        rule: 'maxLength',
        value: 3,
        errorMessage:"Maximo 3 digitos"
        },
    ])
    .addField('#password', [
        {
        rule: 'required',
        errorMessage:"Falta tu contraseña"
        },
        {
        rule: 'integer',
        },
        {
        rule: 'maxLength',
        value: 3,
        },
    ]).onSuccess(()=>{
      $.ajax({
        url:"../php/index_AX.php",
        method:"POST",
        data:$("#loginform").serialize(),
        cache:false,
        success:(respAX)=>{
          let AX = JSON.parse(respAX);
          Swal.fire({
            title:"ESCOM - IPN",
            text:AX.msj,
            icon:AX.icono,
            didDestroy:()=>{
              if(AX.cod == 0)
                location.reload();
              else
                location.href = "../Matform.html";
            }
          }); // sweetAlert/
        }
      }); // ajax/
    }); // justValidate/
}); // ready/

