<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="3000"
      controls
      indicators
      background="#ababab"
      img-width="1024"
      img-height="380"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Text slides with image -->
      <b-carousel-slide
        caption="PHOTOVOLTAIQUE"
        text="L'énergie solaire pour vos installations."
        img-src="/image/ind.jpg"
      >
        <b-button variant="outline-warning"><b class="text-white">Demander votre projet</b></b-button>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide img-src="/image/rentabilité.jpg">
        <b-button variant="outline-warning"><b class="text-white">Demander votre projet</b></b-button>
        <h1>L'énergie solaire pour vos installations</h1>
      </b-carousel-slide>

      <!-- Slides with image only -->
      <b-carousel-slide img-src="/image/std.png">
        <b-button variant="outline-warning"><b class="text-white">Demander votre projet</b></b-button>
      </b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide img-src="/image/maison1.png">
        <b-button variant="outline-warning"><b class="text-white">Demander votre projet</b></b-button>
      </b-carousel-slide>

      <!-- Slide with blank fluid image to maintain slide aspect ratio -->

    </b-carousel>

    <p class="mt-4">
      {{ slide }}<br>
    </p>

    
  </div>
</template>

<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>