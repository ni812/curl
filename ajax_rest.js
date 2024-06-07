$(document).ready(function () {
  $("form").submit(function (event) {

		$.ajax({
      type: "POST",
      url: "dadata.php",
			data: {'ip':  $("#ip").val()},
			success: function (result){
        console.log(result);
			}
		});

    /*$.ajax({
      type: "GET",
      url: url + formData.query,
	    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization: Token "+ token)  //Authorization: Token 3365840a169dd67828ab9127365d75c1becdeb62
      },
      data: '',
      dataType: "json",
      encode: true,
    }).done(function (result) {
      console.log(result);
	});*/

    event.preventDefault();
  });
});