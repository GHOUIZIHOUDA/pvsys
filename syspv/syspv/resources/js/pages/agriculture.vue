
<template>
    <div>
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
                    img-src="/image/ga.png"
                >
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>

                <!-- Slides with custom text -->
                <b-carousel-slide img-src="/image/arg.png">
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                    <h1>L'énergie solaire pour l'agriculture au Maroc</h1>
                </b-carousel-slide>

                <!-- Slides with image only -->
                <b-carousel-slide img-src="/image/agr.jpg">
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
                    <br><br><p class="text-justify "><b>Pour les exploitants agricoles, on peut citer 3 raisons pour passer au photovoltaïque agricole :

            Valoriser vos surfaces inexploitées : une installation de panneaux photovoltaïques sur votre bâtiment agricole ou une toiture annexe n’est pas une  dépense  “superficielle”. Bien  au contraire, il s’agit d’un investissement qui, une fois amorti, vous permettra de dégager des revenus non négligeables ! 
                    </b></p><br>
                    <p class="text-center text-white"><b>Comment ?</b></p><br><br>
                    <p class="text-justify "><b>– En optant  par  exemple  pour  <span class="text-warning">l’autoconsommation  directe  de  l’énergie  produite</span> (afin de faire des 
            économies  directes  sur  votre  facture d’électricité) que  vous  pouvez cumuler avec la vente de votre 
            surplus d’électricité inutilisée (lorsque votre production solaire dépasse vos besoins en énergie).</b></p>

            <p class="text-justify "><b>– En préférant  la  <span class="text-warning">vente  totale de la production de votre électricité</span> (un choix à privilégier si vous êtes propriétaire d’un bâtiment de stockage, par exemple !). </b></p>

            <p class="text-justify "><b>– Ou même, sous réserve d’éligibilité, en<span class="text-warning"> louant votre toiture</span> !</b></p>

            <p class="text-justify "><b>Ainsi, votre installation a le pouvoir de s’auto-amortir, puis de vous rapporter de l’argent !</b></p><br><br>
                </div>
        <div>
                <b-button variant="warning" @click="show = !show">L'Agriculture photovoltaique</b-button>
                <b-row class="text-center mt-3">
                <b-col md="6">
                    <p><b>Sans le photovoltaique</b></p>
                    <b-overlay :show="show" class="d-inline-block" rounded="circle">
                    <b-img thumbnail rounded="circle" fluid src="/image/gar3.png" alt="Image 1" class="pv"></b-img>
                    </b-overlay>
                </b-col>
                <b-col md="6">
                    <p><b>Avec le photovoltaique</b></p>
                    <b-overlay :show="show" class="d-inline-block" rounded="circle">
                    <b-img thumbnail rounded="circle" fluid src="/image/avec.png" alt="Image 1" class="pv"></b-img>
                    </b-overlay>
                </b-col>
                </b-row>
            </div><br><br><br>


<div>
  <b-card-group deck>
    <b-card  img-src="/image/gar.png" img-alt="Image" img-top>  
        <b-card-text>
            <b class="text-centre">le photovoltaique pour diminuer vos factures</b>
        </b-card-text>
    </b-card>
    <b-card  img-src="/image/ame.png" img-alt="Image" img-bottom>
        <b-card-text>
            <b class="text-centre"> photovoltaique pour améliorer le rendement agricole</b>
        </b-card-text>
    </b-card>

    <b-card  img-src="/image/qual.png" img-alt="Image" img-top>
        <b-card-text>
            <b class="text-centre">le photovoltaique pour améliorer la qualité de la production</b>
        </b-card-text>
    </b-card>

    <b-card  img-src="/image/quant.png" img-alt="Image" img-bottom>
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
</style>
