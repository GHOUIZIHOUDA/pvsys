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
                                <router-link to="/projet" exact><span>Projet</span></router-link>

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
    <b-col class="col-md-4"></b-col>
    <b-col class="col-md-6">
    <div class="container">           
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ville.id}}</td>
                    <td>{{ville.codepostal}}</td>
                    <td>{{ville.ville}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add</button>
                        <router-link :to="{name:'edit', params: { id: ville.id }}" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-bs-whatever="@mdo">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteVille(ville.ville)">Delete</button>
                    </td>

                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add</button>
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-bs-whatever="@mdo">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </b-col>
</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New ville</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="addVille">
                        <div class="mb-3 mt-4">
                            <label for="recipient-codepostal" class="col-form-label">Code postal:</label>
                            <input type="number" class="form-control" id="recipient-codepostal" v-model="ville.codepostal">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-ville" class="col-form-label">Ville:</label>
                            <input type="text" class="form-control" id="recipient-ville" v-model="ville.ville">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" >Ajouter</button>
                </div>
            </div>
        </div>
    </div>


        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New ville</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="updateVille">
                        <div class="mb-3 mt-4">
                            <label for="recipient-codepostal" class="col-form-label">Code postal:</label>
                            <input type="number" class="form-control" id="recipient-codepostal" v-model="ville.codepostal">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-ville" class="col-form-label">Ville:</label>
                            <input type="text" class="form-control" id="recipient-ville" v-model="ville.ville">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" >Ajouter</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</template>
<script>
export default {
  data() {
    return {
        vill: {},
        ville: {},
        villes: [],
    }
  },
  created() {
      this.axios
        .get('http://localhost:8000/api/villes/')
        .then(response => {
            this.villes = response.data;
        });

  },
created() {
      this.axios
        .get('http://localhost:8000/api/villes/${this.$route.params.id}')
        .then((res) => {
            this.ville = response.data;
        });

  },
  methods: {
    // handleOnchange(e) {
    //   this.input.image = e.target.files[0];
    // },
    addVille() {

        axios
            .post("http://localhost:8000/api/villes", this.ville)
            .then(response => {
                this.$router.push({name: 'dashville'})
            })
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        },
    },
    updateVille(){
            this.axios
                .patch('http://localhost:8000/api/villes/${this.$route.params.id}', this.vill)
                .then((res) => {
                    this.$router.push({name: 'dashville'});
                });
    },
    deleteVille(id) {
        this.axios
            .delete('http://localhost:8000/api/villes/${id}')
            .then(response => {
                let i = this.villes.map(data => data.id).indexOf(id);
                this.villes.splice(i, 1)
            })
    }
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