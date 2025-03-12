// document.addEventListener('DOMContentLoaded', function () {
//     // Obtener todos los enlaces del sidebar
//     const serviceLinks = document.querySelectorAll('.services-sidebar__link');

//     // Obtener el contenedor donde se mostrará el contenido
//     const contentContainer = document.getElementById('services-content');

//     // Cargar el contenido inicial (proyectos eléctricos)
//     loadServiceContent('proyectos-electricos');

//     // Agregar event listener a cada enlace
//     serviceLinks.forEach(link => {
//         link.addEventListener('click', function (e) {
//             e.preventDefault();

//             // Remover la clase active de todos los enlaces
//             serviceLinks.forEach(l => l.classList.remove('active'));

//             // Agregar la clase active al enlace clickeado
//             this.classList.add('active');

//             // Obtener el ID del servicio a mostrar
//             const serviceId = this.getAttribute('data-service');
//             // console.log("Cargando servicio:", serviceId);

//             // Cargar el contenido del servicio
//             loadServiceContent(serviceId);
//         });
//     });

//     // Función para cargar contenido mediante AJAX
//     function loadServiceContent(serviceId) {
//         // Mostrar un indicador de carga
//         contentContainer.innerHTML = '<div class="loading-spinner">Cargando...</div>';

//         // URL absoluta a los archivos de contenido
//         const url = '/cycweb/pages/content/' + serviceId;

//         // console.log("URL de solicitud:", url);

//         // Crear una solicitud AJAX
//         const xhr = new XMLHttpRequest();
//         xhr.open('GET', url, true);

//         // Configurar la función de callback para cuando la solicitud se complete
//         xhr.onload = function () {
//             if (this.status === 200) {
//                 // Insertar el contenido en el contenedor
//                 contentContainer.innerHTML = this.responseText;

//                 // Opcional: hacer scroll al inicio del contenido
//                 // contentContainer.scrollIntoView({ behavior: 'smooth' });
//             } else {
//                 // Mostrar un mensaje de error si la solicitud falla
//                 contentContainer.innerHTML = '<div class="error-message">Error al cargar el contenido. Por favor, inténtelo de nuevo.</div>';
//             }
//         };

//         // Manejar errores de red
//         xhr.onerror = function () {
//             contentContainer.innerHTML = '<div class="error-message">Error de conexión. Por favor, verifique su conexión a Internet.</div>';
//         };

//         // Enviar la solicitud
//         xhr.send();
//     }
// });