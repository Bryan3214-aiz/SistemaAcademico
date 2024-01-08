{include file="header.tpl"}

<body>

  <div id="carousel-container">
    <div id="image-container">


      <img class="carousel-image" src="img/aula2.jpg" alt="Imagen 1">
      <img class="carousel-image" src="img/profesor.jpg" alt="Imagen 2">
      <img class="carousel-image" src="img/inglesClase.jpg" alt="Imagen 3">
      <img class="carousel-image" src="img/chicaDibujando.jpg" alt="Imagen 4">
      <img class="carousel-image" src="img/estudiantesSB.jpg" alt="Imagen 5">
      <img class="carousel-image" src="img/aula3.jpg" alt="Imagen 6">
    </div>
  </div>

  <script>
    const imageContainer = document.getElementById('image-container');
    let currentIndex = 0;

    function showNextImage() {
      currentIndex = (currentIndex + 1) % imageContainer.children.length;
      updateCarousel();
    }

    function updateCarousel() {
      const translateValue = -currentIndex * 100 + '%';
      imageContainer.style.transform = 'translateX(' + translateValue + ')';
    }

    setInterval(showNextImage, 3000); // Cambia de imagen cada 3 segundos
  </script>

  <!-- descripción sobre el colegio-->
  <section class="knowledge">
    <div class="knowledge__container container">
      <div class="knowledege__texts">
        <h2 class="subtitle">Colegio Hispanoamericano</h2>
        <p class="knowledge__paragraph">El Colegio Hispanoamericano se destaca como una de las instituciones educativas
          más destacadas a nivel académico en el país. Con un compromiso inquebrantable con la excelencia educativa,
          este colegio ha establecido un estándar excepcional en la formación integral de sus estudiantes.<br><br>Desde
          su fundación, el Colegio Hispanoamericano ha cultivado un entorno educativo que fomenta el pensamiento
          crítico, la creatividad y el respeto mutuo. Sus programas académicos están diseñados para desafiar a los
          estudiantes a alcanzar su máximo potencial, proporcionando una base sólida en disciplinas clave mientras
          fomenta el desarrollo de habilidades para el siglo XXI.</p>
        <a href="https://uh.ac.cr/" target='__blank' class="btnLeer" rel='noopener noreferrer'>Leer más</a>
      </div>

      <figure class="knowledge__picture">
        <img src="img/hombre.jpg" class="knowledge__img">
      </figure>
    </div>
  </section>

  <!-- Info sobre el colegio-->
  <section class="colegio-section knowledge-section">
    <div class="knowledge-container">
      <div class="block">
        <h3>Misión</h3>
        <p>Nuestra misión en el Colegio Hispanoamericano es proporcionar una educación integral y de calidad, basada en
          valores humanos, culturales y académicos, que inspire a nuestros estudiantes a alcanzar su máximo potencial.
          Buscamos fomentar el pensamiento crítico, la creatividad y el respeto por la diversidad, preparando a los
          estudiantes para enfrentar los desafíos del mundo globalizado.</p>
        <ul class="custom-list">
          <li>Ofrecer una educación de excelencia que promueva el desarrollo integral de cada estudiante.</li>
          <li>Inculcar valores éticos y morales que guíen la conducta y las decisiones de los alumnos.</li>
          <li>Fomentar un ambiente inclusivo que celebre la diversidad cultural y fomente la tolerancia.</li>
          <li>Implementar programas específicos que fomenten la inclusión y celebren la diversidad, garantizando un
            ambiente en el que cada estudiante se sienta respetado y representado.</li>
          <li>Establecer alianzas con organizaciones y comunidades locales para fortalecer el compromiso con la
            inclusión y la diversidad en todos los aspectos de la vida académica y comunitaria.</li>
        </ul>
      </div>
      <div class="block">
        <h3>Visión</h3>
        <p>En el Colegio Hispanoamericano, aspiramos a ser reconocidos como líderes en la formación de ciudadanos
          globales y conscientes. Buscamos ser un referente en innovación educativa, preparando a los estudiantes para
          enfrentar los retos del siglo XXI con confianza y comprensión intercultural.</p>
        <ul class="custom-list">
          <li>Ser una institución educativa de referencia que inspire a otras a seguir estándares de excelencia.</li>
          <li>Integrar tecnologías emergentes y metodologías pedagógicas avanzadas para mejorar la experiencia
            educativa.</li>
          <li>Desarrollar programas que preparen a los estudiantes para contribuir de manera significativa a la sociedad
            global.</li>
          <li>Fomentar programas de intercambio estudiantil y colaboraciones con instituciones educativas
            internacionales para brindar a nuestros estudiantes experiencias enriquecedoras y perspectivas globales.
          </li>
          <li>Facilitar la formación continua del personal docente en las últimas tendencias educativas y tecnológicas,
            asegurando una enseñanza dinámica y relevante.</li>
        </ul>
      </div>
      <div class="block">
        <h3>Valores</h3>
        <p>En el Colegio Hispanoamericano, nuestros valores forman el cimiento sólido sobre el cual construimos la
          experiencia educativa de nuestros estudiantes. Estos valores no solo son principios escritos, sino también
          pilares vivos que sustentan nuestra comunidad, guiándonos en cada paso que damos hacia la excelencia y la
          formación integral.</p>
        <ul class="custom-list">
          <li><strong>Excelencia:</strong> Buscamos la excelencia en todo lo que hacemos. Desde los logros académicos
            hasta el desarrollo personal, inspiramos a nuestros estudiantes a perseguir la calidad y a alcanzar metas
            que vayan más allá de las expectativas convencionales.</li>
          <li><strong>Integridad:</strong> La integridad es el corazón de nuestra comunidad. Fomentamos la honestidad,
            la transparencia y la coherencia entre lo que decimos y hacemos. Valoramos la ética y la responsabilidad
            como elementos esenciales de la educación que ofrecemos.</li>
          <li><strong>Respeto:</strong> Celebramos la diversidad en todas sus formas y creamos un ambiente donde cada
            individuo se siente valorado y respetado. Fomentamos el respeto mutuo, la tolerancia y la comprensión como
            componentes esenciales de la convivencia diaria.</li>
          <li><strong>Responsabilidad Social y Ambiental:</strong> Guiamos a nuestros estudiantes hacia una conciencia
            global y la responsabilidad de contribuir al bienestar de la sociedad y el medio ambiente. Inculcamos el
            compromiso de ser agentes de cambio positivo en la comunidad local y en el mundo.</li>
        </ul>
      </div>
    </div>
  </section>
</body>

{include file="footer.tpl"}