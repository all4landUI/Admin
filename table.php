<?php
	include('head.php');
?>

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">테이블</h1>
			<p class="info-text">여러형태의 테이블.</p>
		</header>

		<!-- .content -->
		<div data-content="content">
			<h3>기본형</h3>
			<p>기본 thead, tbody caption</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-table">
						<table>
							<caption>테이블에 대한 설명</caption>
							<thead>
								<tr>
									<th><input type="checkbox"></th>
									<th>내용</th>
									<th>내용</th>
									<th>내용</th>
								</tr>
							</thead>
							<tbody>
								<tr class="center">
									<td><input type="checkbox"></td>
									<td>내용</td>
									<td>내용</td>
									<td>내용</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code> div class="table"</code> 안에 table을 생성<br>
						그 외 
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>가로형</h3>
			<p>글쓰기 맞춤</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-table table-vertical">
						<table>
							<caption>테이블에 대한 설명</caption>
							<tbody>
								<tr>
									<th>제목</th>
									<td><input type="text" class="ui-input" placeholder="내용"></td>
								</tr>
								<tr>
									<th>제목</th>
									<td>
										<span class="ui-select fa">
											<select name="" id="">
												<option value="">선택</option>
											</select>
										</span>
									</td>
								</tr>
								<tr>
									<th>제목</th>
									<td>
										<textarea name="" id="" cols="30" rows="10" class="ui-textarea" placeholder="내용"></textarea>
									</td>
								</tr>
								<tr>
									<th>제목</th>
									<td>
										<span class="ui-file">
                                            <input class="file_upload" value="파일선택" disabled="disabled"><!--
                                            --><label for="ex_file">업로드</label>
                                            <input type="file" id="ex_file">
                                        </span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code> div class="table"</code> 안에 table을 생성<br>
						그 외 
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