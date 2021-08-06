<template>
<div class="bg-white nab">
  <nav class="navbar navbar-expand-lg fixed-top opacity-0">
    <a href="#" class="navbar-brand float-left"><img src="/image/moshriq.png" alt="logo" class="logo" /> </a>
    <button type="button" class="navbar-toggler border-warning" data-toggle="collapse" data-target="#navbarCollapse1">
      <span class=" border-warning text-warning"><b>Menu</b></span>
    </button>
    <div class="collapse navbar-collapse float-right" id="navbarCollapse1">
      <div class="navbar-nav d-flex align-items-center">
          <router-link to="/" class="nav-item nav-link active text-warning" >Societe</router-link>
          <a href="#" class="nav-item nav-link text-warning">Secteurs</a>
          <a href="#" class="nav-item nav-link text-warning">Services</a>
          <a href="#" class="nav-item nav-link text-warning">Témoignages</a>
          <a href="#" class="nav-item nav-link text-warning">Contact</a>
          <a href="#" class="nav-item nav-link text-warning">Register</a>
          <a href="#" class="nav-item nav-link text-warning">Connexion</a>
      </div>
    </div>
  </nav>
  <router-view></router-view>

</div>


</template>
<script>
export default {
  name : 'nav-bar'
}
  
</script>
<style scoped>
  .nab{
    overflow: hidden;
  }
  .logo{
    width:100%;
    height:22px;
    float:right;
  }
  nav{
    background: rgba(255,255,255) ;
  }
  .search:focus {
      border-color: #FFC107;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(255, 251, 24);
  }
  .search{
    color: #FFC107;
  }

</style>
