<template>
<div class="etude">
    <Navbar></Navbar>
        <div>
            <b-carousel
                id="carousel-1"
                v-model="slide"
                :interval="3000"
                controls
                indicators
                background="#ababab"
                img-width="1024"
                img-height="280"
                style="text-shadow: 1px 1px 2px #333;"
                @sliding-start="onSlideStart"
                @sliding-end="onSlideEnd"
            >
            <!-- Text slides with image -->
                <b-carousel-slide
                    caption="PHOTOVOLTAIQUE"
                    text="L'énergie solaire pour l'agriculture au Maroc."
                    img-src="/image/etu.png"
                >
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>

                <!-- Slides with custom text -->
                <b-carousel-slide img-src="/image/etud.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                    <h1>L'énergie solaire pour l'agriculture au Maroc</h1>
                </b-carousel-slide>

                <!-- Slides with image only -->
                <b-carousel-slide img-src="/image/etude.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>


            <!-- Slide with blank fluid image to maintain slide aspect ratio -->
            </b-carousel>
            <p class="mt-4">
            {{ slide }}<br>
            </p>
        </div>
<div class="row">
    <div class="col-md-2"></div>
  <div class="mt-4 col-md-8">
    <b-card img-src="/image/irradiation.jpg" img-alt="Card image" img-left class="mb-3 img">
      <b-card-text>
            <h4 class="text-warning text-center">ANALYSE DU SITE</h4><br><br>
            <p class="text-center">Estimation d'ensoleillement</p>
            <p class="text-center">Estimation des heures d'ensoleillement</p>
            <p class="text-center">Estimation du besoin en eau/énergétique</p>      
    </b-card-text>
    </b-card><br><br>

    <b-card img-src="/image/installat.png" img-alt="Card image" img-right class="img">
        <b-card-text>
            <h4 class="text-warning text-center">CHOIX DES EQUIPEMENTS</h4><br><br>
            <p class="text-center">Choix des équipements</p>
            <p class="text-center">Choix des câbles</p>         
        </b-card-text>
    </b-card><br><br><br>
    <b-card img-src="/image/cout.png" img-alt="Card image" img-left class="mb-3 img">
      <b-card-text>
            <h4 class="text-warning text-center">COUT D'INSTALLATION</h4><br><br>
            <p class="text-center">Calcul du coût annuel de l’investissement</p>
            <p class="text-center">Calcul du coût du KWh</p>     
    </b-card-text>
    </b-card>
  </div>
</div>
</div>
</template>
<script>
import Navbar from '../components/Navbar.vue'
export default {
    components: {
    
    Navbar,
    },
}
</script>
<style scoped>
    .img{
        width: 100%;
        height: 300px;
    }
    .etude{
        overflow: hidden;
    }
</style>