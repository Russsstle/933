const main_url = $('base').attr('href')
const api_url = main_url + 'api/'
$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    }
  })
  $('#author').DataTable();
});