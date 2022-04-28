
<div class="hero is-fullheight is-primary">
    <div class="hero-body">
        <div class="container card-content has-text-centered"> 
            <img src="{{get_option('alma_logo')}}" width="250px">

            <h1 class="title is-1">          

              @field('titulo_de_la_tarjeta_gb', 'home_gb')

            </h1>
            <p class="subtitle has-margin-top-20 has-margin-bottom-20">
              {{get_field('fecha_nacimiento', 'home_gb')}}
            </p>
            <p class="subtitle has-margin-top-20 has-margin-bottom-20 has-text-weight-bold">
              @field('documento_identidad')
            </p>

          <div class="column is-5 is-margin-auto">
                    <div class="box is-radius ">
                      <div class="content has-text-left">
                        <p>
                          <span class="icon-text">
                            <span class="icon has-text-primary">
                              <i class="fas" data-feather="map-pin"> </i>
                            </span>
                            <span class="hast-text-primary"> @field('direccion_tarjeta', 'home_gb')</span>
                          </span>
                        </p>
                        <p>
                          <span class="icon-text">
                            <span class="icon has-text-primary">
                              <i class="fas" data-feather="smartphone"> </i>
                            </span>
                            <span class="hast-text-primary"> @field('telefono', 'home_gb')</span>
                          </span>
                        </p>
                        <p>
                          <span class="icon-text">
                            <span class="icon has-text-primary">
                              <i class="fas" data-feather="mail"> </i>
                            </span>
                            <a class="hast-text-primary" href="@field('email_tarjeta')"><span>@field('email_tarjeta', 'home_gb')</span></a>
                          </span>
                        </p>
                      </div>
                    </div>

                    <div class="subtitle">
                      <a class="has-margin-right-10" href="http://www.behance.net/gabettiol">Behance</a>
                      <a href="https://instagram.com/gabettiol">Instagram</a>
                    </div>
          </div>
          

        </div>
    </div>
  </div>