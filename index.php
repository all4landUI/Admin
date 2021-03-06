<?php
	include('head.php');
?>

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">Document</h1>
			<p class="info-text">사용법을 설명합니다.</p>
		</header>

		<!-- .content -->
		<div data-content="content">
			<h3>기본형</h3>
			<p>열을 사용하여 기본 모든 레이아웃을 만듭니다.</p>
			<div class="demo-block demo-layout">
				<div class="source">
					<div data-grid="row">
						<div class="ui-col_12">
							data-grid=12
						</div>
					</div>
					<div class="ui-row">
						<div class="ui-col_12">
							data-grid=1
						</div>
						<div class="ui-col_12">
							data-grid=2
						</div>
						<div class="ui-col_12">
							data-grid=4
						</div>
						<div class="ui-col_12">
							data-grid=5
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code>class=*</code> 1~12 사용
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			<h3>속성</h3>
			<table>
				<thead>
					<tr>
						<th>속성</th>
						<th>설명</th>
						<th>타입</th>
						<th>Accepted Values</th>
						<th>기본</th>
					</tr>
				</thead>
				<tr>
					<td>size</td>
					<td>버튼크기</td>
					<td>string</td>
					<td>width-1~500 , height-1~500</td>
					<td>height:40px , width : 60px</td>
				</tr>
			</table>
			
		</div>
		<!-- .content -->
	</section>
	<!-- #brandContent -->
<?php
	include("foot.php");
?>