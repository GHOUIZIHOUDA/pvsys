<template>
<div>
    <Navbar></Navbar>
    <Header></Header><br><br>

    <div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 form ml-1">
        <h1 class="title text-center">Register</h1><br><br>
        <form class=" mb-6" @submit.prevent="submit">
            <div class="form-group">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="inputPrenom">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="inputPrenom">Adresse</label>
                <input type="text" class="form-control" id="inputAdresse" placeholder="Adresse">
            </div>
            <div class="form-group">
                <label for="inputTelephone">Téléphone</label>
                <input type="number" class="form-control" id="inputTelephone" placeholder="Téléphone">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select of the cities</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Open this select of the secteur</option>
                <option value="1">{{ $villes }}</option>
                <!--option value="2">Two</option>
                <option value="3">Three</option-->
            </select>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select of the type project</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword2">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label for="inputNote2">Discription du projet</label>
                <textarea type="text" class="form-control" id="inputNote2" placeholder="Note"></textarea>
            </div>
            <div><button type="submit" class="btn btn-warning float-right"><b class="text-white">Créer un compte</b></button></div>
        </form>
        </div>
        <div class="col-md-1"></div>
    </div><br><br>
    </div><br><br>
</div>
</template>
<script>
import Navbar from '../components/Navbar.vue'
import Header from '../components/Header.vue'
export default {
    components: {
    
    Navbar, Header,
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
        .post("/api/client", this.input)
        .then((res) => {
          console.log("created");
        })
        .catch((error) => console.log("er : " + error));
    },
  },
}



</script>
<style scoped>
    .title{
        color: #ffffff;
    }
    .ty{
        color: black;
    }
    .form{
        background-color: #050082;
        color: #ffffff;
    }
</style>