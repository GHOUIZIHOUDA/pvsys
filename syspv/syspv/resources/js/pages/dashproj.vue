<template>
<div class="client">        
    <template>
        <div>
            <b-navbar toggleable type="warning" variant="warning" >
                <b-navbar-brand href="#"><img src="/image/moshriq.png" alt="logo" class="logo" /></b-navbar-brand>
                <b-navbar-toggle target="navbar-toggle-collapse">
                    <template #default="{ expanded }">
                        <b-icon v-if="expanded" icon="chevron-bar-up"></b-icon>
                        <b-icon v-else icon="chevron-bar-down"></b-icon>
                    </template>
                </b-navbar-toggle>
                <b-collapse id="navbar-toggle-collapse" is-nav>
                    <b-navbar-nav class="ml-auto">
                        <b-col class="col-md-4">
                            <div class="row"><b-nav-item href="#">Projets demandés</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Clients</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Témoignages</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Employés</b-nav-item></div>
                        </b-col>
                        <b-col class="col-md-4">
                            <div class="row"><b-nav-item href="#">Composants</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Départements</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Secteurs</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Services</b-nav-item></div>
                        </b-col>
                        <b-col class="col-md-4">
                            <div class="row"><b-nav-item href="#">Types de projets</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Status</b-nav-item></div>
                            <div class="row"><b-nav-item href="#">Villes</b-nav-item></div>
                        </b-col>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar><br><br>
            <h5>Bonjour, Mme GHOUIZI HOUDA</h5>
            <div class="row ">
                <br><br>
                <b-col class="col-md-12">
                    <b-card-group deck>
                        <b-card class="bg-warning" title="Projets demandés" header-tag="header" footer-tag="footer">
                            <b-card-text><h6>12 Projets demandés</h6></b-card-text>
                        </b-card>
                        <b-card class="tem" title="Clients" header-tag="header" footer-tag="footer">
                            <b-card-text><h6>7 Clients</h6></b-card-text>
                        </b-card>
                    </b-card-group>
                </b-col>
            </div>
        </div>
    </template><br><br>

<div>
<div class="row">
    <b-col class="col-md-1"></b-col>
    <b-col class="col-md-10">
    <div class="container">           
        <table class="table table-striped table-responsive" @submit.prevent="submit">
            <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Nom du client</th>
                    <th>Prénom du client</th>
                    <th>Email du client</th>
                    <th>Téléphone du client</th>
                    <th>Adresse du client</th>
                    <th>Ville du client</th>
                    <th>Secteur du projet</th>
                    <th>Type de projet</th>
                    <th>Description du projet</th>
                    <th>Status du projet</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID du projet</td>
                    <td>Nom du client</td>
                    <td>prénom du client</td>
                    <td>email du client</td>
                    <td>téléphone du client</td>
                    <td>Adresse du client</td>
                    <td>ville du client</td>
                    <td>secteur du projet</td>
                    <td>type du projet</td>
                    <td>description du projet</td>
                    <td>
                        <select class="form-select" v-modal="input.status"  aria-label="Default select example">
                            <option selected>Status du projet</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>ID du projet</td>
                    <td>Nom du client</td>
                    <td>prénom du client</td>
                    <td>email du client</td>
                    <td>téléphone du client</td>
                    <td>Adresse du client</td>
                    <td>ville du client</td>
                    <td>secteur du projet</td>
                    <td>type du projet</td>
                    <td>description du projet</td>
                    <td>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Status du projet</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-danger" @click="deleteVille(projet.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </b-col>
</div>
</div>


</template>
<script>
export default {
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
        .post("/api/projet", this.input)
        .then((res) => {
          console.log("created");
        })
        .catch((error) => console.log("er : " + error));
    },
  },
}

</script>
<style scoped>
    a{
        color: white;
    }
    ol:active{
        background-color: white;
    }
    ol a:active{
        color: rgb(255, 230, 5);
    }
    .logo{
        width:100%;
        height:22px;
        float:right;
    }
    .client{
        overflow: hidden;
    }
    .tem{
        background-color: #202D65;
        color: white;
    }
</style>