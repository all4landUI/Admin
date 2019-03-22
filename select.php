<?php
	include('head.php');
?>
	

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">폼</h1>
			<p class="info-text">select, input, textarea에 대한 사용법</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>Select</h3>
			<p>셀렉트 UI의 기본 사용 가이드</p>
			<div class="demo-block">
				<div class="source">
					
					<span class="ui-select fa">
						<select name="" id="">
							<option value="">기본값1</option>
							<option value="">기본값2</option>
							<option value="">기본값3</option>
							<option value="">기본값4</option>
						</select>
					</span>

					<span class="ui-select fa width-200">
						<select name="" id="">
							<option value="">기본값1</option>
							<option value="">기본값2</option>
							<option value="">기본값3</option>
							<option value="">기본값4</option>
						</select>
					</span>

					<span class="ui-select fa width-300">
						<select name="" id="">
							<option value="">기본값1</option>
							<option value="">기본값2</option>
							<option value="">기본값3</option>
							<option value="">기본값4</option>
						</select>
					</span>

					
				</div>
				<div class="meta">
					<div class="description">
						<code>class="ui-select"</code> 기본클래스
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>Input</h3>
			<p>input UI의 기본 사용 가이드</p>
			<div class="demo-block">
				<div class="source">
					<input type="text" class="ui-input" placeholder="입력">
					<input type="password" class="ui-input" placeholder="패스워드">
				</div>
				<div class="meta">
					<div class="description">
						<code>class="ui-input"</code> 기본클래스
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>Textarea</h3>
			<p>textarea UI의 기본 사용 가이드</p>
			<div class="demo-block">
				<div class="source">
					<textarea name="" id="" class="ui-textarea" placeholder="내용"></textarea>
				</div>
				<div class="meta">
					<div class="description">
						<code>class="ui-textarea"</code> 기본클래스
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>input file</h3>
			<p>input UI의 기본 사용 가이드</p>
			<div class="demo-block">
				<div class="source">
					<span class="ui-file">
                        <input class="file_upload" value="파일선택" disabled="disabled"><!--
                        --><label for="ex_file">업로드</label>
                        <input type="file" id="ex_file">
                    </span>
				</div>
				<div class="meta">
					<div class="description">
						<code>class="ui-file"</code> 기본클래스
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