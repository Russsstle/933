$(document).ready(function() {
  $('ul.tabs').tabs()
  $('.sidenav').sidenav()
  $('.collapsible').collapsible()
  $('.dropdown-trigger').dropdown({
    coverTrigger: false
  })
  $('.carousel-about').carousel({
    indicators: true
  })
  $('.carousel-client-message').carousel({
    indicators: false,
    fullWidth: true
  })
  $('.slider').slider({
    height: $(window).height() - (isMobile() ? 56 : 90)
  })
  $('.moveNextCarousel').click(function(e) {
    e.preventDefault()
    e.stopPropagation()
    $('.carousel.carousel-slider').carousel('next')
  })
  $('.movePrevCarousel').click(function(e) {
    e.preventDefault()
    e.stopPropagation()
    $('.carousel.carousel-slider').carousel('prev')
  })
})
$(window).on('load', function() {
  $('.loader-wrapper').fadeOut()
})

function isMobile() {
  return typeof window.orientation !== 'undefined' || navigator.userAgent.indexOf('IEMobile') !== -1
}
