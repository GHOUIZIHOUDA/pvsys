<template>
<div>
    <Navbar></Navbar>
    <Header></Header><br><br>

    <div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 form ml-1">
        <h1 class="title text-center">Contactez-nous</h1><br><br>
        <form class=" mb-6">
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword2">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label for="inputNote2">Note</label>
                <textarea type="text" class="form-control" id="inputNote2" placeholder="Note"></textarea>
            </div>
            <div><button type="submit" class="btn btn-warning float-right"><b class="text-white">Envoyer</b></button></div><br><br>
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
        types: [
          'nom',
          'prenom',
          'email',
          'password',
        ]
      }
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