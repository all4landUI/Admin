<?php
	include('head.php');
?>
	

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">컴포넌트이름</h1>
			<p class="info-text">여러가지 형태를 나타냅니다.</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>컴포넌트의 유형</h3>
			<p>유형에 대한 간략한 설명</p>
			<div class="demo-block">
				<div class="source">
					
				</div>
				<div class="meta">
					<div class="description">
						<code>class="active"</code> 활성화 클래스
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
					<td>class</td>
					<td>타입별 클래스</td>
					<td>string</td>
					<td>
						.tab_default
						.tab_vertical
					</td>
					<td>.ui-tab.ui-tab_default</td>
				</tr>
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