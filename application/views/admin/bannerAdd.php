<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script>
	$(function(){
		$("#banr_save").bind('click',function(){
			if( '' == $("select[name=banr_tab]").val() ) alert('배너 탭을 선택해주세요.');
			else{
				$( "#banr_save" ).submit();
			}
		})
	});
</script>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php
        	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/sidebar.php');
        ?>
        <!-- Content Start -->
        <div class="content">
			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/header-gnb.php');
			?>
			<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded h-100 p-4">
					<h6 class="mb-4">이미지 등록</h6>
					<form action="/adminProd/bannerSave" id="banr_save" method="post">
						<input type="hidden" class="form-control" name="banr_type" value="<?= $type;?>">
						<?php if($type == "normal") :?>
							<div class="form-floating mb-3">
								<select class="form-select" id="banrTab" name="banr_tab">
									<option selected="">탭 선택</option>
									<option value="1">상시 상품 탭1</option>
									<option value="2">상시 상품 탭2</option>
									<option value="3">상시 상품 탭3</option>
								</select>
								<label for="banrTab" class="form-label">배너 탭</label>
							</div>
						<?php else : ?>
							<div class="form-floating mb-3">
								<select class="form-select" id="banrTab" name="banr_tab">
									<option selected="">탭 선택</option>
									<option value="1">이벤트 상품 탭1</option>
									<option value="2">이벤트 상품 탭2</option>
									<option value="3">이벤트 상품 탭3</option>
								</select>
								<label for="banrTab" class="form-label">배너 탭</label>
							</div>
						<?php endif; ?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="banrImg" name="banr_img">
							<label for="banrImg" class="form-label">배너 이미지 url</label>
						</div>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="banrLinkUrl" name="banr_link_url">
                            <label for="banrLinkUrl" class="form-label">배너 링크 url</label>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="banrUseYn" name="banr_use_yn" checked="checked">
							<label class="form-check-label" for="banrUseYn">배너 노출 여부</label>
						</div>
						<button type="button" class="btn btn-success" id="banr_save">배너 저장</button>
						<button type="button" class="btn btn-primary" onclick="history.back()" id="banr_cancel">취소</button>
					</form>
				</div>
            </div>

            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
