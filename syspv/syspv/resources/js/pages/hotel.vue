<template>
    <div class="hotel">
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
                    img-src="/image/the.png"
                >
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>

                <!-- Slides with custom text -->
                <b-carousel-slide img-src="/image/hot4.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                    <h1>L'énergie solaire pour l'agriculture au Maroc</h1>
                </b-carousel-slide>

                <!-- Slides with image only -->
                <b-carousel-slide img-src="/image/htle.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>


            <!-- Slide with blank fluid image to maintain slide aspect ratio -->
            </b-carousel>
            <p class="mt-4">
            {{ slide }}<br>
            </p>
        </div>
                <h2 class="text-center title">AGRICULTURE  ET PHOTOVOLTAIQUE : UN MARIAGE REUSSI !</h2>   <br><br>

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
                    <br><br><p class="text-justify "><b>L’énergie solaire est une solution  propre, silencieuse  et écologique. Dans l’hôtellerie  comme dans toutes les  branches du  tourisme,  on s’intéresse  de  plus en plus à l’écologie. Et de plus en plus de vacanciers tendent vers des  séjours  respectueux de  l’environnement. C’est pourquoi l’<span class="text-warning">installation de panneaux solaires sur le toit de votre hôtel </span> un pas de plus vers l’évolution de votre offre touristique sur un secteur très concurrentiel.</b></p>
                    <p class="text-justify "><b>L’énergie représente de grosses dépenses pour un établissement hôtelier. Adopter ce type de système est  certes  coûteux  mais  pourrait  vous  permettre  de  faire de belles économies à terme. Finies les factures très salées de gaz, de fioul et d’électricité ! Les  capteurs solaires allègent considérablement votre budget.</b></p>
                    <p class="text-justify "><b>Les  conditions  d’utilisation  d’un  panneau  solaire  sont  idéales  dans un hôtel. En effet, c’est l’été qu’il  accueille  le  plus  de  clients  et  c’est  aussi  à  cette période-là que le soleil offre ce qu’il a de meilleur. Quant  aux  établissements  qui  font  leur  plus  grosse  saison  l’hiver,  en  montagne   par exemple,  ils  useront  du  soleil pour couvrir leurs besoins en eau chaude, tout en ayant recours à un chauffage d’appoint.</b></p><br>
                </div><br><br><br><br>



<div>
  <b-card-group deck>
    <b-card  img-src="/image/htt.png" img-alt="Image" img-top>  
        <b-card-text>
            <b class="text-centre">Économisez sur votre facture d'électricité</b>
        </b-card-text>
    </b-card>
    <b-card  img-src="/image/tth.png" img-alt="Image" img-bottom>
        <b-card-text>
            <b class="text-centre"> photovoltaique pour pour diminuer les charges des hoteliers</b>
        </b-card-text>
    </b-card>

    <b-card  img-src="/image/teh.png" img-alt="Image" img-top>
        <b-card-text>
            <b class="text-centre">le photovoltaique a pour but d'économiser de l'énergie et pour être plus écologique</b>
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
        data() {
      return {
        mainProps: { width: 105, height: 105, class: 'm1' }
      }
    },
    data() {
      return {
        show: true
      }
    },
    components: {
            Navbar,
    },
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
        background-color:rgb(47,62,136, 0.9);
    }
    p{
        width: 80%;
        margin: auto;
    }
    .hotel{
        overflow: hidden;
    }
</style>