<?php
	include('head.php');
?>

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">Font</h1>
			<p class="info-text">
			구글 CDN을 이용하면 별도의 @font-face를 정의하지 않아도 되기 때문에 편리하지만 서버에 직접 업로드하는 것보다 속도가 느리고<br> 구글 CDN 서버가 제대로 동작하지 않을 때는 웹폰트를 제공받지 못 할 수 있습니다.<br> 구글 CDN의 경우 @font-face에 WOFF와 WOFF2만 지원하므로 IE 6~8, IE 호환성 보기 모드에서는 웹폰트를 사용할 수 없습니다.<br>
			그렇기때문에 UI팀에서는 로컬서버를 지향하며 로컬서버 위주의 폰트 설정을 기준점으로 삼겠습니다.
			</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>Noto Sans Fonts</h3>
			<p>Noto Sans</p>
			<div class="demo-block">
				<div class="source">

				</div>
				<div class="meta">
					<div class="description">

					</div>

					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
		</div>
		<!-- .content -->
	</section>
	<!-- #brandContent -->
<?php
	include("foot.php");
?>