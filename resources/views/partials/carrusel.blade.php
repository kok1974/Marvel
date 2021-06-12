 <!-- Carrusel-->
 <section class="row px-0 mx-0 d-none d-sm-block">
    <div class="col-12 px-0">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{ asset('imagenes/1.jpg') }}" alt="Wakanda">
                <a href="{{ url('comiteca/evento/245') }}">
                    <div class="carousel-caption-mio text-white">
                        <H2>Wakanda Forever!!!</H2>
                        <p>La guerra de Lobezno llega a Wakanda</p>
                    </div>
                </a>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('imagenes/2.jpg') }}" alt="viuda_negra">
                <a href="{{ url('comiteca/serie/729') }}">
                    <div class="carousel-caption-mio text-white">
                        <H2>Desde Rusia con amor</H2>
                        <p>La espia que me amo. Natasha, la viuda negra, ha vuelto con su familia. </p>
                    </div>
                </a>
              </div>
              <div class="carousel-item" >
                <img class="d-block img-fluid" src="{{ asset('imagenes/3.jpg') }}" alt="Asia">
                <a href="{{ url('comiteca/serie/788') }}">
                    <div class="carousel-caption-mio text-white">
                        <H2>Este vs Oeste</H2>
                        <p>!!Vuelve la guerra fria!! Las manipulaciones del Barón Zemo elevan la tensión</p>
                    </div>
                </a>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
  </section>
