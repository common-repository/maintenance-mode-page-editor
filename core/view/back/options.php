<div class="container">
	<div class="wrap">
		<h1>Maintenance mode</h1>
	</div>

</div>

<link rel="stylesheet" href="<?php echo $style; ?>">
<div class="container">
	<div class="vi-tabs">
		<div class="vi-tabs-head">
			<div class="vi-tab-title active">
				<a href="#">Content</a>
			</div>
		</div>
		<div class="vi-tabs-body">
			<div class="vi-tab-content active">

				<div class="vi-row">
					<div class="vi-column1">


						<form action="" method="POST">

							<table class="form-table mp-table">
								<tbody>
								<tr>
									<th scope="row">Enable maintenance mode</th>
									<td id="front-static-pages">
										<input <?php echo !empty($enabled_mmpm) ? 'checked' : ''?> id="checkbox" type="checkbox" name=plugin_options[enabled_mmpm]" class="vi-checkbox enabled-mmpm">
										<label class="vi-label" for="checkbox"></label>

									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="">Headline</label>
									</th>
									<td id="front-static-pages">
										<input placeholder="Mail title" type="text" name="plugin_options[title]" class="vi-input" value="<?php echo !empty($title) ? $title : ''?>">
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="">Logo</label>
									</th>
									<td id="front-static-pages">
										<div>
											<input type="text" name="plugin_options[logo]" value="<?php echo !is_null($logo) && !empty($logo)? $logo : '' ?>" id="image_url" class="regular-text image_url">
											<input type="button" name="upload-btn" id="upload-btn" class="button-secondary upload-btn" value="Upload Image">
										</div>

									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="">Description</label>
									</th>
									<td id="front-static-pages">
										<?php

										$content = $description ? $description : '';
										$editor_id = 'mycustomeditor';

										wp_editor( $content, $editor_id, [
											'textarea_name' => 'plugin_options[description]',
											'editor_height' => 200,
											'media_buttons' => false
										] );

										?>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="">Image background</label>
									</th>
									<td id="front-static-pages">
										<img src="<?php echo !is_null($background) && !empty($background)? $background :  "/wp-includes/images/media/default.png" ?>" style="max-width: 300px;" class="mmpg-background" alt="bg">
										<div>
											<input type="hidden" name="plugin_options[background]" value="<?php echo !is_null($background) && !empty($background)? $background : '' ?>" id="image_url" class="regular-text image_url">
											<input type="button" name="upload-btn" id="upload-btn" class="button-secondary upload-btn" value="Upload Image">
										</div>

									</td>
								</tr>

								<tr>
									<th scope="row">
										<label for="">Twitter Url</label>
									</th>
									<td id="front-static-pages">
										<input placeholder="Twitter" type="text" name="plugin_options[twitter]" class="vi-input" value="<?php echo !empty($twitter) ? $twitter : ''?>">
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="">Facebook Url</label>
									</th>
									<td id="front-static-pages">
										<input placeholder="Facebook" type="text" name="plugin_options[facebook]" class="vi-input" value="<?php echo !empty($facebook) ? $facebook : ''?>">
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="">Instagram Url</label>
									</th>
									<td id="front-static-pages">
										<input placeholder="Instagram" type="text" name="plugin_options[instagram]" class="vi-input" value="<?php echo !empty($instagram) ? $instagram : ''?>">
									</td>
								</tr>

								<tr>
									<th scope="row">
										<label for="">Custom CSS</label>
									</th>
									<td id="front-static-pages">
										<textarea class="vi-textarea"  name="plugin_options[css]" id=""  rows="5"><?= stripslashes($css)?></textarea>
									</td>
								</tr>

								<tr>
									<th scope="row">
										<label for="">Custom js</label>
									</th>
									<td id="front-static-pages">
										<textarea class="vi-textarea"  name="plugin_options[js]" id="" rows="5"><?=stripslashes($js)?></textarea>
									</td>
								</tr>



								<tr>
									<th scope="row">
										<p class="submit">
											<input type="submit" name="submit" id="submit" class="button button-primary" value="Save changes">
										</p>
									</th>
									<td id="front-static-pages">

									</td>
								</tr>
								</tbody>
							</table>

						</form>

					</div>
					<div class="vi-column3">

					</div>
					<div class="vi-column3">

					</div>
				</div>

			</div>
			<div class="vi-tab-content">Content 2</div>
			<div class="vi-tab-content">Content 3</div>
		</div>
	</div>
</div>

