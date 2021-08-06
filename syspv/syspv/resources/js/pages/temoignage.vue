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
                style="text-shadow: 1px 1px 2px #333;"
            >
            <!-- Text slides with image -->
                <b-carousel-slide
                    caption="PHOTOVOLTAIQUE"
                    text="L'énergie solaire au Maroc."
                    img-src="/image/temoi.png"
                >
                    <b-button variant="warning"><b class="text-white">Demandez votre projet</b></b-button>
                </b-carousel-slide>
            <!-- Slide with blank fluid image to maintain slide aspect ratio -->
            </b-carousel>
            <p class="mt-4">
            {{ slide }}<br>
            </p>
        </div>
    <div>
        <br><br>
        <b-card-group deck>
            <b-card title="Title" img-src="" img-alt="Image" img-top>
                <b-card-text>
                    This is a wider card with supporting text below as a natural lead-in to additional content.
                    This content is a little bit longer.
                </b-card-text>
                <template #footer>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </template>
            </b-card>

            <b-card title="Title" img-src="" img-alt="Image" img-top>
                <b-card-text>
                    This card has supporting text below as a natural lead-in to additional content.
                </b-card-text>
                <template #footer>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </template>
            </b-card>
        </b-card-group>
    </div><br><br>
        <div>
        <b-card-group deck>
            <b-card title="Title" img-src="" img-alt="Image" img-top>
                <b-card-text>
                    This is a wider card with supporting text below as a natural lead-in to additional content.
                    This content is a little bit longer.
                </b-card-text>
                <template #footer>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </template>
            </b-card>

            <b-card title="Title" img-src="" img-alt="Image" img-top>
                <b-card-text>
                    This card has supporting text below as a natural lead-in to additional content.
                </b-card-text>
                <template #footer>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </template>
            </b-card>
        </b-card-group>
    </div>
</div>
</template>
<script>
import Navbar from '../components/Navbar.vue'
import Header from '../components/Header.vue'

export default {
        components: {
            Navbar, Header,
    },
}
</script>
<style scoped>
    
</style>