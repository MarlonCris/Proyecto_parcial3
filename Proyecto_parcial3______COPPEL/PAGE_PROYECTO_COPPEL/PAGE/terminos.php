<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
     
    <title>Document</title>
</head>
<body>
    <h1>Terminos y condiciones de CETIS107</h1>
    <p>
    “Términos y Condiciones” es el documento que rige la relación contractual entre el proveedor de un servicio y el usuario. En la web, este documento a menudo también se denomina “Condiciones de servicio” (ToS), “Condiciones de uso”, EULA (“Acuerdo de licencia de usuario final”), “Condiciones generales” o “Notas legales”.

Los Términos y Condiciones no son más que un contrato en el que el titular aclara las condiciones de uso de su servicio. Algunos ejemplos son el uso del contenido (derechos de autor), las reglas que los usuarios deben seguir mientras interactúan entre sí en el sitio web/app, las reglas relacionadas con la cancelación o suspensión de la cuenta de un usuario, etc.

Se debe prestar especial atención a las cláusulas de limitación de responsabilidad (y descargos de responsabilidad), por ejemplo, en caso de mal funcionamiento de la aplicación o el sitio web.

Los Términos y Condiciones representan el documento que ayuda a prevenir y resolver los problemas. Por ello, son fundamentales en muchos casos para defenderse en caso de abuso.
    </p>
    <p>¿Qué debo hacer si tengo un sitio web de comercio electrónico? ¿Se recomienda crear un documento de términos y condiciones?
Sí. De hecho, no solo es recomendable, sino que a menudo es obligatorio.

Los términos y condiciones no solo son de vital importancia para protegerte de posibles responsabilidades, sino que también contienen información legalmente obligatoria, como los derechos del usuario y las políticas de devolución, desistimiento o cancelación..

Por lo general, un sitio web/app debe tener un documento de Condiciones de servicio válido y preciso siempre que estén en juego problemas complejos, como es el caso del comercio electrónico, donde se trata información confidencial como los datos de pago.

En los sitios web de comercio electrónico, las Condiciones de servicio suelen ser el documento que contiene la información relacionada con las condiciones de venta y los medios de pago, envío, entrega, condiciones de cancelación y desistimiento, etc., como lo requieren las regulaciones de protección al consumidor. Los proveedores europeos de servicios B2C (venta de bienes/servicios) también deben incluir, entre otras cosas, información sobre la resolución de litigios en línea (RLL) para explicar el proceso obligatorio de resolución de disputas online.</p>
    <script>
        Swal.fire({
  title: 'Antes de continuar escribe tu nombre',
  input: 'text',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Aceptar',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {
    return fetch(`//api.github.com/users/${login}`)
      .then(response => {
        if (!response.ok) {
          throw new Error(response.statusText)
        }
        return response.json()
      })
      .catch(error => {
        Swal.showValidationMessage(
          `Por favor escribe tu nombre: ${error}`
        )
      })
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: `Muchas gracias ${result.value.login}`,
      imageUrl: result.value.avatar_url
    })
  }
})
 

    </script>


<script src="js/jquery-3.6.1.js"></script>
</body>
</html>