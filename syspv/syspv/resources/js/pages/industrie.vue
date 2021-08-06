
<template>
    <div class="indus">
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
                    img-src="/image/ind.jpg"
                >
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>

                <!-- Slides with custom text -->
                <b-carousel-slide img-src="/image/inds.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                    <h1>L'énergie solaire pour l'industrie au Maroc</h1>
                </b-carousel-slide>

                <!-- Slides with image only -->
                <b-carousel-slide img-src="/image/indst.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>


            <!-- Slide with blank fluid image to maintain slide aspect ratio -->
            </b-carousel>
            <p class="mt-4">
            {{ slide }}<br>
            </p>
        </div>
                <h2 class="text-center title">L'INDUSTRIE ET PHOTOVOLTAIQUE : UN MARIAGE REUSSI !</h2>   <br><br>

                <div>
                    <b-container class="bv-example-row">
                        <b-row cols="1" cols-sm="2" cols-md="4" cols-lg="12">
                            <b-col>
                                <b-card-group deck class="mb-3">
                                    <b-card border-variant="light" class="text-center">
                                        <b-img v-bind="mainProps" rounded="circle" src="/image/prix.png" alt="Circle image"></b-img>
                                        <b-card-text>RENTABILITE</b-card-text>
                                    </b-card>
                                </b-card-group>
                            </b-col>
                            <b-col>
                                <b-card-group deck class="mb-3">
                                    <b-card border-variant="light" class="text-center">
                                        <b-img v-bind="mainProps" rounded="circle" src="/image/environnement.png" alt="Circle image"></b-img>
                                        <b-card-text>AGIR POUR LA PLANÈTE</b-card-text>
                                    </b-card>
                                </b-card-group>
                            </b-col>
                            <b-col>
                                <b-card-group deck class="mb-3">
                                    <b-card border-variant="light" class="text-center">
                                        <b-img v-bind="mainProps" rounded="circle" src="/image/stabilite.png" alt="Circle image"></b-img>
                                        <b-card-text>DIVERSIFIER LE PATRIMOINE</b-card-text>
                                    </b-card>
                                </b-card-group>
                            </b-col>
                            <b-col>
                                <b-card-group deck class="mb-3">
                                    <b-card border-variant="light" class="text-center">
                                        <b-img v-bind="mainProps" rounded="circle" src="/image/baisseprix.png" alt="Circle image"></b-img>
                                        <b-card-text>ÉNERGIE STABLE</b-card-text>
                                    </b-card>
                                </b-card-group>
                            </b-col>
                        </b-row>
                    </b-container>

                </div>


                <div>
                </div><br><br>

                <div class=" firstp">
                    <br><br><h3 class="text-center">Vous êtes industriel</h3><br>
                    <p class="text-center text-white"><b>Vos objectifs ?</b></p><br>
                    <br><p class="text-justify "><b>Vous souhaitez investir dans un projet rentable et réduire votre facture d’électricité, en intégrant la production d’énergie renouvelable.
                    </b></p><br>
                    <p class="text-justify "><b>- <span class="text-warning">Réduire votre facture énergétique annuelle</span> tout en vous engageant dans la transition énergétique</b></p>
                    <p class="text-justify "><b>- <span class="text-warning">Gagner en image</span> en réduisant votre empreinte carbone</b></p>
                    <p class="text-justify "><b>- <span class="text-warning">Optimiser la rénovation ou la construction</span> d’un nouveau bâtiment de stockage ou de production</b></p>
                    <p class="text-justify "><b>- <span class="text-warning">Valoriser votre patrimoine</span> foncier </b></p><br><br>
                </div><br><br><br><br>
        


<div>
  <b-card-group deck>
    <b-card  img-src="/image/in.png" img-alt="Image" img-top>  
        <b-card-text>
            <b class="text-centre">le photovoltaique pour diminuer vos factures</b>
        </b-card-text>
    </b-card>
    <b-card  img-src="/image/ins.png" img-alt="Image" img-bottom>
        <b-card-text>
            <b class="text-centre"> photovoltaique pour améliorer le rendement industriel</b>
        </b-card-text>
    </b-card>

    <b-card  img-src="/image/insd.png" img-alt="Image" img-top>
        <b-card-text>
            <b class="text-centre">le photovoltaique pour améliorer la qualité de production</b>
        </b-card-text>
    </b-card>

    <b-card  img-src="/image/noor.png" img-alt="Image" img-bottom>
        <b-card-text>
            <b class="text-centre"> photovoltaique pour augmenter la quantité de production</b>
        </b-card-text>
    </b-card>
</b-card-group>
</div><br><br>


            
    <div>


    </div>
    
    </div>
</template>
<script>
export default {
    name:'Agriculture',
        components: {
            Navbar,
    },
        data() {
      return {
        mainProps: { width: 105, height: 105, class: 'm1' }
      }
    },
    data() {
      return {
        show: true
      }
    }
}
import Navbar from '../components/Navbar.vue'

</script>
<style scoped>
    .pv{
        width: 100%;
        height: 200px;
    }
    .title{
        width: 100%;
    }
    .firstp{
        background-color:rgb(47,62,136, 0.8);
    }
    p{
        width: 80%;
        margin: auto;
    }
    .indus{
        overflow: hidden;
    }
</style>