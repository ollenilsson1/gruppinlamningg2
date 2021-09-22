jQuery(document).ready(function() {
    var myCarousel = document.querySelector('#carouselExampleIndicators')
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 1000,
      wrap: false
    })
})