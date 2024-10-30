jQuery(document).ready(function($){
	$('.upload-btn').click(function(e) {
		$this = this;
		e.preventDefault();
		var image = wp.media({
			title: 'Upload Image',
			multiple: false
		}).open()
			.on('select', function(e){
				var uploaded_image = image.state().get('selection').first(),
					image_url = uploaded_image.toJSON().url;
				$($this).parent().find('.image_url').val(image_url);
				$($this).parent().parent().find('.mmpg-background').attr('src', image_url);
			});
	});
});
