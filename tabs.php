<?php
	include('head.php');
?>
	

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">탭</h1>
			<p class="info-text">여러가지 형태를 나타냅니다.</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>속성</h3>
			<p>가장 많이 쓰이는 기본탭형식</p>
			<div class="demo-block">
				<div class="source">
					<nav class="ui-tab ui-tab_default">
						<div class="ui-wrap_tabs">
							<a href="#" class="active" role="button">탭1</a>
							<a href="#" role="button">탭2</a>
							<a href="#" role="button">탭3</a>
						</div>
					</nav>
				
				</div>
				<div class="meta">
					<div class="description">
						<code>class="ui-tab_default"</code> 기본 탭 UI 클래스
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>세로탭</h3>
			<p>세로형식의 탭을 제공</p>
			<div class="demo-block">
				<div class="source">
					<nav class="ui-tab ui-tab_vertical">
						<div class="ui-wrap_tabs">
							<a href="#" class="active" role="button">탭1</a>
							<a href="#" role="button">탭2</a>
							<a href="#" role="button">탭3</a>
							<a href="#" role="button">탭4</a>
						</div>
					</nav>
				</div>
				<div class="meta">
					<div class="description">
						<code>class="ui-tab_vertical"</code> 세로 탭 UI 클래스
					</div>
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>탭 사이즈</h3>
			<p>탭의 사이즈 조절 예시</p>
			<div class="demo-block">
				<div class="source">
					<nav class="ui-tab ui-tab_default">
						<div class="ui-wrap_tabs">
							<a href="#" class="active width-150" role="button">탭1</a>
							<a href="#" class="width-250" role="button">탭2</a>
							<a href="#" class="width-300" role="button">탭3</a>
							<a href="#" role="button">탭2</a>
						</div>
					</nav>
				</div>
				<div class="meta">
					<div class="description">
						<code>class="width-*"</code>  크기값을 1~500까지 조절
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
					<td>height:35px , width : 75px</td>
				</tr>
			</table>
			
		</div>
		<!-- .content -->
	</section>
	<!-- #brandContent -->
<?php
	include("foot.php");
?>