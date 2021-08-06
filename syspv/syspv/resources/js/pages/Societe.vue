<template>
    <div>
        <Navbar></Navbar>
        <Header></Header>
        <div class="nosservice">
            <div><h1 class="text-center nosservices">Nos services</h1><br><br></div>
            <div>
  <b-card-group deck>
    <b-card title="Etude technique" img-src="/image/etude.png" img-alt="Image" img-top>
      <b-card-text>
        Avant de faire toute installation photovoltaique, il est nécessaire de faire une étude préliminaire.
      </b-card-text>
      <template #footer>
          <b-button block variant="warning">Découvrez nos services</b-button>

      </template>
    </b-card>

    <b-card title="Installation technique" img-src="/image/installation.jpg" img-alt="Image" img-top>
      <b-card-text>
        Après l'étude, la société a le plisair de faire l'installation de votre projets.
      </b-card-text>
      <template #footer>
          <b-button block variant="warning">Découvrez nos services</b-button>

      </template>
    </b-card>

    <b-card title="Maintenance technique" img-src="/image/maintenance.png" img-alt="Image" img-top>
      <b-card-text>
        Notre société, après toute installation, elle est responsable sur toute maintenance demandé par le client sur notre projets réalisés.
      </b-card-text>
      <template #footer>
          <b-button block variant="warning">Découvrez nos services</b-button>
      </template>
    </b-card>
  </b-card-group>
</div>
</div>

        <div>
            <div><br><br><h1 class="text-center nossecteurs">Nos secteurs</h1><br><br></div>
                        <div>
  <b-card-group deck>
    <b-card title="Agriculture" img-src="/image/agr.jpg" img-alt="Image" img-top>
      <b-card-text>
        Utilisé le photovoltaique dans le domaine de l'Agriculture. C'est la diminution dans vos factures et la bénéfice de la clote.
      </b-card-text>
      <template #footer>
          <b-button block variant="warning">Découvrez nos secteurs</b-button>
      </template>
    </b-card>

    <b-card title="Industrie" img-src="/image/ind.jpg" img-alt="Image" img-top>
      <b-card-text>
        Utilisé le photovoltaique dans le domaine de l'Industrie. C'est la diminution dans vos factures et la bénéfice de l'industrialisation.
      </b-card-text>
      <template #footer>
          <b-button block variant="warning">Découvrez nos secteurs</b-button>

      </template>
    </b-card>

    <b-card title="Hotel" img-src="/image/hot3.png" img-alt="Image" img-top>
      <b-card-text>
        Utilisé le photovoltaique dans les hotels. C'est la diminution dans vos factures et la bénéfice des clients.
      </b-card-text>
      <template #footer>
          <b-button block variant="warning">Découvrez nos secteurs</b-button>
      </template>
    </b-card>
  </b-card-group>
</div>
        </div>
        <div><br><br>
        <h1 class="nosvisio text-center">Notre vision</h1><br><br>               
        <div class="vis">
            <div></div>
            <div><p class="text-justify" ><b>Le   Maroc   a  connu  une  augmentation  de  son  importation  énergétique de   87%   en   49   ans.   En   2021,   le    Maroc   a   importé   70.72%    de son énergie.
            Avec  des  ressources  en  énergie  fossiles  qui   approchent   l’épuisement, dans    un    contexte    d'augmentation    des    prix   et   de   réchauffement climatique ;   <span class="moshriq">MOSHRI9</span>   a   été   fondé,   afin   d’œuvrer,   à  la  transition énergétique     vers    des     sources     renouvelables,    et    en    particulier l’énergie    solaire    photovoltaïque    sous    ses    différentes    formes.
            Les besoins en électricité ne cessent d’augmenter à travers le monde.</b></p><br><br>
            </div>
            <div><img src="/image/pv15.png" /></div>
            <div></div>
        </div>
        </div>
        <Footer></Footer>
    </div>
</template>

<script>

import Header from '../components/Header'
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'







export default {
  components: {
    
    Navbar, Header, Footer 
    },
}
</script>
<style scoped>
    .nosvisio{
        color: #26317C;        
    }
    .nosservices{
        color: #26317C;
    }
    .vis{
        display: grid;
        grid-template-columns:6% 40% 40% 6%;
        grid-column-gap: 2%;
    }
    img{
        width: 100%;
        height: 250px;
        margin: auto;
    }
    #img_container {
        position:relative;
        display:inline-block;
        text-align:center;
    }

    .button {
        position:absolute;
        bottom:180px;
        right:0px;
        width:auto;
        height:30px;
        background-color: #FFED00;
    }
    .nossecteurs{
        color: #26317C;
    }
    img{
        width: 85%;
        height: 250px;
        margin: auto;
    }
</style>