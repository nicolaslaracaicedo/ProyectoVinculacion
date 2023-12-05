
        document.addEventListener("DOMContentLoaded", function () {
            const scrollToTopButton = document.getElementById("scrollToTop");

            // Muestra u oculta el botón según la posición de desplazamiento
            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 100) {
                    scrollToTopButton.style.display = "block";
                } else {
                    scrollToTopButton.style.display = "none";
                }
            });

            // Desplaza suavemente hacia arriba cuando se hace clic en el botón
            scrollToTopButton.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });


            
        });

        
        function initMap() {
            var location = { lat: -0.41246184274482944, lng: -79.30945014702033 };

            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Universidad de las fuerzas armadas ESPE'
            });
        }

        
          


        





       