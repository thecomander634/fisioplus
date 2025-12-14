$(document).ready(function() {
  // Ocultar todas las secciones al inicio
  $("[data-section]").hide();

  // Mostrar solo la sección de inicio
    $("#home-section").fadeIn(200);

  // Cuando se hace clic en un enlace del menú o botón
  $("[data-target]").on("click", function(evento) {
    // Evita que el enlace recargue la página
    evento.preventDefault();

    // Obtener el valor de data-target (ej: "events-section")
    var destino = $(this).attr("data-target");

    // Ocultar todas las secciones
    $("[data-section]").fadeOut(300);

    // Mostrar solo la sección seleccionada
    $("#" + destino).fadeIn(400);

    // Subir arriba al cambiar de sección
    window.scrollTo(0, 0);
  });
});
  // Ocultar todos los <p> de las cards al inicio
  $(".card .card-text").hide();

  // Al hacer clic en una card
  $(".card").on("click", function() {
    // Cerrar cualquier otra descripción abierta
    $(".card .card-text").not($(this).find(".card-text")).slideUp();

    // Alternar la visibilidad de la descripción de esta card
    $(this).find(".card-text").slideToggle();
  });
// Validación del formulario de contacto (usuarios y terapeutas)
document.getElementById('contact-form').addEventListener('submit', function (e) {
  e.preventDefault();
  const email = document.getElementsByClassName('contact-email').value;

  // Validar formato de correo (usuarios y terapeutas)
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regex.test(email)) {
    alert('Por favor, introduce un correo válido.');
    return;
  
  }
   if (password.length < 3 || password.length > 7) {
    alert('La contraseña debe tener entre 3 y 7 caracteres.');
    return; // Detenemos la ejecución si no cumple
  }
  // Mostrar modal de confirmación
  const modal = new bootstrap.Modal(document.getElementById('contactModal'));
  modal.show();

  // Reiniciar formulario
  this.reset();
});
