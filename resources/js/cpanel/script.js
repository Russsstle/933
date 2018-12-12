const main_url = $('base').attr('href') + 'cpanel/'
const api_url = $('base').attr('href') + 'api/'

$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    dataType: 'json',
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
    contentType: !hasFile,
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

$('form[name=frmEditData]').submit(function(e) {
  e.preventDefault()

  let hasFile = $(this).is('[hasFile]')

  let url = $(this).data('url')
  let redirect = $(this).data('redirect')

  let form_data = {
    _method: 'PUT',
    ...$(this).serializeJSON()
  }

  if (hasFile) {
    form_data = new FormData($(this)[0])
    form_data.append('_method', 'PUT')
  }

  $.ajax({
    context: this,
    url: api_url + url,
    type: 'POST',
    data: form_data,
    contentType: !hasFile,
    processData: !hasFile
  }).done(function(response) {
    if (response.success) {
      swal('Updated Successfully!', null, 'success').then(function() {
        location.href = main_url + redirect
      })
    } else {
      swal('Error!', response.error, 'warning')
    }
  })
})

$('.btnDeleteData').click(function(e) {
  e.preventDefault()
  let url = $(this).data('url')
  let redirect = $(this).data('redirect')

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
        url: api_url + url,
        type: 'POST',
        data: {
          _method: 'DELETE'
        }
      }).done(function(response) {
        if (response.success) {
          swal('Deleted Successfully!', null, 'success').then(function() {
            location.href = main_url + redirect
          })
        } else {
          swal('Error!', response.error, 'warning')
        }
      })
    }
  })
})
