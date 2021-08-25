(function ($) {

});

var sequence = $('#sequence').detach();

$('.relation-btn').on('click', function () {
	let sequence_id = $(this).id;
	sequence_id = sequence_id.split('-')[2];

	$.ajax({
		type : 'POST',
		dataType : 'json',
		url : handleAjax.ajaxURL,
		data : {
			action : handleAjax.ajx.startEpisode.action,
			nonce : handleAjax.ajx.startEpisode.nonce,
			sequence_id : sequence_id
		}
	}).done(function (data) {

	})
})