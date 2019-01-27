const main_url = $('base').attr('href')
const api_url = main_url + 'api/'

$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    },
    error: function() {
      swal('Error', 'We are sorry for the inconvenience.', 'error')
    }
  })
  swal.setDefaults({
    heightAuto: false
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
    data: $(this).serialize(),
    error: function({ responseJSON: response }) {
      if (response.errors) {
        swal('Error', response.errors.username[0], 'error')
      } else {
        swal('Error', 'We are sorry for the inconvenience.', 'error')
      }
    }
  })
    .done(function(response) {
      if (response.success) {
        location.href = main_url + 'cpanel'
      } else {
        swal('Error', response.error, 'error')
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

$('form[name=frmAddData]').submit(function(e) {
  e.preventDefault()

  let hasFile = $(this).is('[hasFile]')

  let url = $(this).data('url')
  let redirect = $(this).data('redirect')

  let form_data = $(this).serialize()

  if (hasFile) {
    form_data = new FormData($(this)[0])
  }

  $.ajax({
    context: this,
    url: api_url + url,
    type: 'POST',
    data: form_data,
    contentType: !hasFile && undefined,
    processData: !hasFile
  }).done(function(response) {
    if (response.success) {
      swal('Added Successfully!', null, 'success').then(function() {
        location.href = main_url + redirect
      })
    } else {
      swal('Error!', response.error, 'warning')
    }
  })
})

$('form[name=frmSend]').submit(function(e) {
  e.preventDefault()

  $.ajax({
    type: 'POST',
    data: $(this).serialize()
  }).done(function(response) {
    if (response.success) {
      swal('Sent Successfully!', null, 'success').then(function() {
        location.reload()
      })
    } else {
      swal('Error!', response.error, 'warning')
    }
  })
})

$(window).on('load', function() {
  $('.loader-wrapper').fadeOut()
})

function isMobile() {
  return typeof window.orientation !== 'undefined' || navigator.userAgent.indexOf('IEMobile') !== -1
}
