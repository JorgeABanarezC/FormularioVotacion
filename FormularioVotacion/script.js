$(document).ready(function() {
    $('#votacionForm').submit(function(e) {
      e.preventDefault(); // Evitar el envío del formulario por defecto
  
      var formData = $(this).serialize(); // Obtener los datos del formulario
  
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        success: function(response) {
          alert(response); // Mostrar mensaje de éxito
          // Aquí puedes realizar cualquier otra acción después de guardar los datos
        },
        error: function(xhr, status, error) {
          alert('Error en la solicitud: ' + error); // Mostrar mensaje de error
        }
      });
    });
  });
  