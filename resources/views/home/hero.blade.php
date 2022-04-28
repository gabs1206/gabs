<div class="hero is-fullheight is-light filter-hero" data-url="{{home_url('/app/uploads/2020/06/4514359.mp4')}}">
    <div class="hero-body">
        <div class="container" data-aos="fade-up">
            <h2 class=" is-size-2 has-margin-top-20 has-margin-bottom-20 font-w is-700 has-text-dark">
                @field('texto_saludo', 'home_gb')
            </h2>
            <h1 class="title is-size-1 is-primary ">
                @field('sub_title', 'home_gb')
            </h1>
            <p class="has-margin-bottom-20">
                @field('descripcion_corta', 'home_gb')
            </p>

            <div class="is-flex is-bold">
                <a href="@field('descripcion_corta', 'home_gb')" class="button btn is-primary has-margin-right-25">Formación y experiencia</a>
                <a href="@field('descripcion_corta', 'home_gb')" class="button btn is-dark">Conoce mis habilidades</a>
            </div>
        </div>
    </div>
</div>
