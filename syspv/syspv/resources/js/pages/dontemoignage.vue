<template>
  <div>
    <Navbar></Navbar>
    <div>
      <b-carousel
        id="carousel-1"
        :interval="3000"
        controls
        indicators
        background="#ababab"
        img-width="1024"
        img-height="280"
        style="text-shadow: 1px 1px 2px #333"
      >
        <b-button variant="warning"
            ><b class="text-white">Demandez votre projet</b></b-button
          >
        <!-- Text slides with image -->
        <b-carousel-slide
          caption="PHOTOVOLTAIQUE"
          text="L'énergie solaire au Maroc."
          img-src="/image/temoi.png"
        >

        </b-carousel-slide>
        <!-- Slide with blank fluid image to maintain slide aspect ratio -->
      </b-carousel>
      <p class="mt-4">{{ slide }}<br /></p>
    </div>
    <div>
      <h1 class="title">Contactez-nous</h1>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 form ml-1">
          <form @submit.prevent="submit">
            <div class="form-group">
              <label for="inputNom2">Nom</label>
              <input
                type="text"
                class="form-control"
                id="inputNom2"
                placeholder="Nom"
              />
            </div>
            <div class="form-group">
              <label for="inputPrenom2">Prénom</label>
              <input
                type="passwotextrd"
                class="form-control"
                id="inputPrenom2"
                placeholder="Prénom"
              />
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                placeholder="Email"
              />
            </div>
            <div class="form-group">
              <label for="inputNote2">Témoignage</label>
              <textarea
                type="text"
                class="form-control"
                v-model="input.description"
                id="description"
                placeholder="Note"
              ></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-warning float-right">
                <b class="text-white">Envoyer</b>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br /><br />

  </div>
</template>
<script>
import Navbar from "../components/Navbar.vue";
export default {
  components: {
    Navbar,
  },
  data() {
    return {
      input: {},
    };
  },
  methods: {
    // handleOnchange(e) {
    //   this.input.image = e.target.files[0];
    // },
    submit() {
      console.log(this.input);
      axios
        .post("/api/temoignage", this.input)
        .then((res) => {
          console.log("created");
        })
        .catch((error) => console.log("er : " + error));
    },
  },
};
</script>
<style scoped>
.title {
  color: #26317c;
}
.ty {
  color: black;
}
.form {
  border: 2px solid #050082;
}
</style>