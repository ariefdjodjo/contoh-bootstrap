<!DOCTYPE html>
<html>
	<head>
		<title>PAW</title>
		<script src="jquery.min.js"> </script>
		<script>
			$(document).ready(function(){
				$('#more').click(function(){
					$('#detil').show();
					$(this).hide();
				})
			});
		</script>
	</head>
	<body>
		<h1>Judul Artikel</h1>
		<div id="master">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis sed urna non tempus. Vivamus euismod tellus luctus commodo tincidunt. Maecenas consequat, dui in placerat iaculis, lacus risus rutrum ante, eget sodales sapien lectus et est. Aenean eu lorem purus. Suspendisse consectetur velit at felis commodo, in sollicitudin neque dignissim. Integer fermentum velit ut ipsum dapibus tempor ut a risus. Nam erat elit, ornare sed metus vitae, eleifend hendrerit nisl. Phasellus at est condimentum, condimentum lorem ut, tempor massa. Donec at nunc lacinia, consequat nulla sagittis, aliquam orci. Ut at lacus vestibulum neque dignissim efficitur ac consequat lacus. Praesent fringilla lorem eget iaculis luctus. Nulla eleifend venenatis diam, vitae euismod metus tempus sit amet. Cras ut aliquet erat. Mauris sed velit porttitor, ornare lorem eget, dictum lectus.
			</p>			
		</div>
		<div id="more">Read More...</div>
		<div id="detil" style="display:none">
			<p>
			Morbi ac ex nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at metus eget diam tristique ornare. Morbi sodales, nibh quis tincidunt porttitor, velit libero interdum ex, id euismod ligula lectus at nunc. Vivamus imperdiet, velit quis bibendum rhoncus, justo erat dapibus purus, egestas feugiat quam turpis quis velit. Nullam viverra id massa imperdiet pellentesque. Fusce ornare metus ac ante mollis viverra. Suspendisse magna lacus, lobortis vestibulum libero sit amet, pulvinar tempor dolor.
			</p>
			<p>
			In elementum sollicitudin ante, fringilla sagittis neque venenatis id. Maecenas malesuada eros a cursus dapibus. Quisque at neque et orci auctor iaculis ut quis lacus. Fusce sed porta magna, quis pulvinar sapien. Fusce pharetra, nibh eu ultricies varius, est magna volutpat sapien, eget dictum lectus diam nec odio. Suspendisse sed ipsum viverra, fermentum augue et, viverra eros. Aliquam tincidunt rutrum velit. Aenean finibus, mi quis rhoncus porttitor, leo mi condimentum urna, nec sodales magna leo ac neque. Etiam quis elit libero. Proin condimentum, eros in mattis volutpat, sem dui eleifend risus, non auctor ipsum nulla id libero.
			</p>
			<p>
			Integer sem ante, lacinia vel arcu in, accumsan sodales mauris. Donec ultrices tincidunt vehicula. Nunc nec metus eu erat faucibus luctus. Nulla ultricies condimentum quam a finibus. In porttitor commodo arcu ut volutpat. Donec eget lacus efficitur, pharetra sapien sit amet, rhoncus nulla. Sed sapien leo, porta eu ligula et, mollis volutpat arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque vel felis quis felis tempus elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus.
			</p>
			<p>
			Phasellus laoreet blandit ultricies. Nam lobortis mi elit, iaculis condimentum ex dictum sit amet. Donec at turpis in purus interdum rhoncus eget id leo. Morbi et vehicula mi. Mauris vitae nisl lobortis arcu lacinia mattis. Duis neque sem, sagittis ornare facilisis vel, placerat id tellus. In hac habitasse platea dictumst. Donec id mollis nisi. Integer interdum vulputate sapien nec porttitor.
			</p>		
		</div>
	</body>
</html>