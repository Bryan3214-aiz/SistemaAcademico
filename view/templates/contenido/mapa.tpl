<style>
    #inst {
        text-align: center;
        color: #005780;
    }
    #inst p{
        color: black;
    }

    #map {
        display: flex;
        justify-content: center;
        padding: 2%;
    }

    iframe {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        max-width: 100%;
        width: 800px;
        height:500px;
    }
</style>

<body>
    <main id="main">
        <header id="inst">
            <h1>Ubicación del Colegio Hispanoamericano</h1>
            <p>¡Encuentra con nosotros todo lo que necesitas para tu éxito académico!</p>
        </header>
        <!-- El div donde se mostrará el mapa de Google -->
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.7161535787586!2d-84.07067482467147!3d9.957557590145676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e48d953e3371%3A0x1479123d46f9857e!2sUniversidad%20Hispanoamericana%20%7C%20Llorente!5e0!3m2!1ses-419!2scr!4v1702850170575!5m2!1ses-419!2scr"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>
</body>
