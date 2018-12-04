const main_url = $('base').attr('href') + 'cpanel/'
const api_url = $('base').attr('href') + 'api/'

$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    beforeSend: function() {
      $.LoadingOverlay('show')
    },
    success: function() {
      $.LoadingOverlay('hide')
    },
    error: function() {
      $.LoadingOverlay('hide')
      swal('Error', 'We are sorry for the inconvenience. Please contact your administrator for help.', 'error')
    }
  })
  $('.datatable').DataTable()
})

$('form[name=frmAddAuthor]').submit(function(e) {
  e.preventDefault()

  $.ajax({
    context: this,
    url: api_url + 'authors',
    type: 'POST',
    data: $(this).serialize()
  }).done(function(response) {
    if (response.success) {
      swal('Added Successfully!', null, 'success').then(function() {
        location.href = main_url + 'author'
      })
    } else {
      swal('Error!', response.error, 'warning')
    }
  })
})

$('form[name=frmEditAuthor]').submit(function(e) {
  e.preventDefault()

  let id = $(this).data('id')

  $.ajax({
    context: this,
    url: api_url + 'authors/' + id,
    type: 'POST',
    data: $(this).serialize()
  }).done(function(response) {
    if (response.success) {
      swal('Updated Successfully!', null, 'success').then(function() {
        location.href = main_url + 'author'
      })
    } else {
      swal('Error!', response.error, 'warning')
    }
  })
})

$('.btnDeleteAuthor').click(function(e) {
  e.preventDefault()

  let id = $(this).data('id')

  swal({
    title: 'Are you sure\nyou want to delete this data?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
    cancelButtonText: 'No'
  }).then(result => {
    if (result.value) {
      $.ajax({
        context: this,
        url: api_url + 'authors/' + id,
        type: 'POST',
        data: {
          _method: 'DELETE',
          id
        }
      }).done(function(response) {
        if (response.success) {
          swal('Deleted Successfully!', null, 'success').then(function() {
            location.href = main_url + 'author'
          })
        } else {
          swal('Error!', response.error, 'warning')
        }
      })
    }
  })
})
