const main_url = $('base').attr('href')
const api_url = main_url + 'api/'

$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    }
  })
  $('ul.tabs').tabs()
  $('.sidenav').sidenav({
    edge: 'right'
  })
  $('.collapsible').collapsible()
  $('.dropdown-trigger').dropdown({
    coverTrigger: false,
    hover: true
  })
  $('.carousel-about').carousel({
    indicators: true
  })
  $('.carousel-client-message').carousel({
    indicators: false,
    fullWidth: true,
    noWrap: true,
    onCycleTo: function() {
      if (
        $('.carousel-client-message .carousel-item')
          .first()
          .is('.active')
      ) {
        $('.left.middle-indicator-text').fadeOut()
        $('.right.middle-indicator-text').fadeIn()
      } else if (
        $('.carousel-client-message .carousel-item')
          .last()
          .is('.active')
      ) {
        $('.left.middle-indicator-text').fadeIn()
        $('.right.middle-indicator-text').fadeOut()
      } else {
        $('.left.middle-indicator-text').fadeIn()
        $('.right.middle-indicator-text').fadeIn()
      }
    }
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

$('form[name=frmLogin]').submit(function(e) {
  e.preventDefault()

  $(this)
    .find('input')
    .prop('readonly', true)
  $(this)
    .find('button')
    .prop('disabled', true)

  $.ajax({
    context: this,
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize()
  })
    .done(function(response) {
      if (response.success) {
        location.href = main_url + 'cpanel'
      } else {
        alert(response.error)
      }
    })
    .always(function() {
      $(this)
        .find('input')
        .prop('readonly', false)
      $(this)
        .find('button')
        .prop('disabled', false)
    })
})

$(window).on('load', function() {
  $('.loader-wrapper').fadeOut()
})

function isMobile() {
  return typeof window.orientation !== 'undefined' || navigator.userAgent.indexOf('IEMobile') !== -1
}
