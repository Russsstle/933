$(document).ready(function() {
  $('ul.tabs').tabs()
  $('.sidenav').sidenav()
  $('.dropdown-trigger').dropdown()
  $('.carousel').carousel({
    indicators: true
  })
  $('.slider').slider({
    height: $(window).height() - 90
  })
  $('.moveNextCarousel').click(function(e) {
    e.preventDefault()
    e.stopPropagation()
    $('.carousel').carousel('next')
  })

  $('.movePrevCarousel').click(function(e) {
    e.preventDefault()
    e.stopPropagation()
    $('.carousel').carousel('prev')
  })
})

$(window).on('load', function() {
  $('.loader-wrapper').fadeOut()
})
