<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.rtl.min.css">
<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.rtl.core.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
	.naver_cafe{
		background: url("/static/img/footer/icon_naver_cafe.png");
		height: 28px;
		width: 28px;
		display: block;
	}
	.naver_blog{
    		background: url("/static/img/footer/icon_naver_blog.png");
    		height: 28px;
    		width: 28px;
    		display: block;
    }
    .fix_btn .bt2{background-image:url(/static/img/footer/main_ic2.png); border-radius:50%;background-color:#ffee00;height:65px;width:65px;}
    .fix_btn{right:10px;bottom:10px;z-index:9999;}
    .fix_btn li{border-radius:50%;background-color:#b4d130;width:45px;height:45px;display:flex;align-items: center;justify-content:center; background-repeat:no-repeat;background-size:30px auto;background-position:center;margin-bottom:10px;box-shadow:0 0 2px #000000a6}
	.fix_btn{position:fixed;right:50px;bottom:30%;}
	.fix_btn p{font-size:15px;line-height:15px;color:#666;}
	.fix_btn li{width:65px;height:65px;margin-bottom:20px;background-size:55px auto;}
	.fix_btn li:hover{background-image:none;cursor:pointer}
	.fix_btn li:hover p{display:block;  position: relative;animation:tex .2s;}

	@media (max-width: 576px){
		#apply-modal{max-width: 85% !important;}
    }
</style>
<!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <footer
          class="text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-3"
             style="background-color: #b4d130"
             >
      <!-- Left -->
      <div class="me-5">
        <span></span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div style="display: flex;">
        <a href="https://blog.naver.com/mylimeeducation" target="_blank" class="text-white me-4">
          <i class="naver_blog"></i>
        </a>
        <a href="https://blog.naver.com/PostList.naver?blogId=thelimeinc" target="_blank" class="text-white me-4">
		  <i class="naver_blog"></i>
		</a>
        <a href="https://instagram.com/limeedu?igshid=YmMyMTA2M2Y=" target="_blank" class="text-white me-4">
          <i class="fab fa-instagram fa-2xl"></i>
        </a>
        <a href="https://m.cafe.naver.com/limecanada" target="_blank" class="text-white me-4">
          <i class="naver_cafe"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-4">
        <!-- Grid row -->
        <div class="row mt-6">
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 mx-auto">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">??????</h6>
            <p><i class="fas fa-phone mr-3"></i> 02 2135 7699</p>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
            <h6 class="text-uppercase fw-bold">?????? ????????????</h6>
            <p><i class="fas fa-home mr-3"></i> ????????? ????????? ???????????? 310 ??????????????? 1204???</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">?????? ????????????</h6>
            <p><i class="fas fa-phone mr-3"></i> ???????????? 1688-0897</p>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
            <h6 class="text-uppercase fw-bold">?????? ?????? ??????</h6>
            <p><i class="fas fa-home mr-3"></i> ??????????????? ????????? ?????????????????? 165 ??????????????? 26??? 484???</p>
			<h6 class="text-uppercase fw-bold">?????? ????????? ??????</h6>
			<p><i class="fas fa-home mr-3"></i> ??????????????? ?????? ???????????? 385-1 3???</p>
			<h6 class="text-uppercase fw-bold">?????? ?????? ??????</h6>
			<p><i class="fas fa-home mr-3"></i> ????????? ?????? ????????? 109 ????????????????????? ?????? 9??? 966???</p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
		  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
		    <!-- Links -->
		    <h6 class="text-uppercase fw-bold">?????? ????????????</h6>
		    <p><i class="fas fa-phone mr-3"></i> ???????????? +1 647 427 2006</p>
		    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
		    <h6 class="text-uppercase fw-bold">????????? ????????? ??????</h6>
		    <p><i class="fas fa-home mr-3"></i> 55 Eglinton Ave East, Suite 601, Toronto ON M4P 1G8 Canada</p>
			<h6 class="text-uppercase fw-bold">????????? ????????? ??????</h6>
			<p><i class="fas fa-home mr-3"></i> 595 Burrard st., Vancouver BC V7X 1J1 Canada</p>
		  </div>
		  <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" >
      ?? 2022 Copyright:
      <a class="text-dark" target="_blank" href="http://mylimeedu.com">mylimeedu.com</a>
    </div>
    <div class="modal fade" id="application_form" tabindex="-1" aria-labelledby="exampleModalLabel" style="z-index:10000;">
      <div class="modal-dialog modal-dialog-centered" id="apply-modal">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">?????? ????????????</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form name='myform' id='myform' method='post'>
				<input type="hidden" name="temp_site" value='limeedu' >
				<input type="hidden" name="tempkbn" value='on' >
				<input type="hidden" name="backURL" value='<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>' >
				<input type="hidden" name="temp_key" value="<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" >
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">??????</label>
					<input type="text" class="form-control" name="temp_namef" id="stu_name" />
				</div>
				<div class="mb-3">
					<label for="message-text" class="col-form-label">?????????</label>
					<select class="form-control" name="temp_tel_01" id="stu_tel_01">
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="016">016</option>
						<option value="017">017</option>
						<option value="018">018</option>
						<option value="019">019</option>
					</select>
					<input type="text" class="form-control" name="temp_tel_02" id="stu_tel_02" placeholder="0000">
					<input type="text" class="form-control" name="temp_tel_03" id="stu_tel_03" placeholder="0000">
				</div>
				<div class="mb-3">
					<select class="form-control" name="temp_address" id="stu_addr" >
						<option value="">????????????</option>
						<option value="1">??????</option>
						<option value="2">??????</option>
						<option value="3">??????</option>
						<option value="4">??????</option>
						<option value="5">??????</option>
						<option value="6">??????</option>
						<option value="7">??????</option>
						<option value="8">??????</option>
						<option value="9">??????</option>
						<option value="10">??????</option>
						<option value="11">??????</option>
						<option value="12">??????</option>
						<option value="13">??????</option>
						<option value="14">??????</option>
						<option value="15">??????????????</option>
						<option value="16">??????</option>
						<option value="17">??????</option>
					</select>
				</div>
				<div class="mb-3">
					<select class="form-control" name="temp_startdate" >
						<option value="">?????? ?????????</option>
						<?
							$date=date("Y-m");
							$date_1=date("Y-m",strtotime('+1 month'));
							$date_2=date("Y-m",strtotime('+2 month'));
							$date_3=date("Y-m",strtotime('+3 month'));
							$date_4=date("Y-m",strtotime('+4 month'));
							$date_5=date("Y-m",strtotime('+5 month'));
							$date_6=date("Y-m",strtotime('+6 month'));
							$date_7=date("Y-m",strtotime('+7 month'));
							$date_8=date("Y-m",strtotime('+8 month'));
							$date_9=date("Y-m",strtotime('+9 month'));
						?>
						<option value="<?=$date?>" class="bl"><?=$date?></option>
						<option value="<?=$date_1?>" class="bl"><?=$date_1?></option>
						<option value="<?=$date_2?>" class="bl"><?=$date_2?></option>
						<option value="<?=$date_3?>" class="bl"><?=$date_3?></option>
						<option value="<?=$date_4?>" class="bl"><?=$date_4?></option>
						<option value="<?=$date_5?>" class="bl"><?=$date_5?></option>
						<option value="<?=$date_6?>" class="bl"><?=$date_6?></option>
						<option value="<?=$date_7?>" class="bl"><?=$date_7?></option>
						<option value="<?=$date_8?>" class="bl"><?=$date_8?></option>
						<option value="<?=$date_9?>" class="bl"><?=$date_9?></option>
					</select>
				</div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">????????????</label>
					<textarea class="form-control" name="temp_stetc" ></textarea>
				</div>
				<div class="mb-3">
					<span class="yac_ttxx"><label for="agree"><input type='checkbox' name='agree' id='agree'  >???????????? ????????? ??????(*) </label> <b class="yac_Btn">[??????]</b><b class="yac_Btn_cl">[????????????]</b></a></span>
					<div class="yac_more">
						<div id="privacy">
							<div class="yac_tit">?????????????????? ??? ????????? ?????? ??????</div>
							<div class="yac_box">
								<div class="taba" id="btn_1" onclick="span_view('1')">???????????? <br>??????????????? ??????</div>
								<div class="tabb" id="btn_2" onclick="span_view('2')">??????????????? <br>?????? ??? ????????????</div>
								<div class="taba" id="btn_3" onclick="span_view('3')">??????????????? <br>?????? ??? ????????????</div>
							</div>

							<div class="yac_con" id="tab_1" style="border:1px solid #000;">
								<h4>??? ???????????? ???????????? ??????</h4>
								<p> ???????????????????????? ????????? ??????????????? ????????? ????????? ????????? ????????? ?????? ??????????????? ???????????? ????????????.
								<p>????????? ?????? ??????????????? ???????????? ????????????.</p>
								<p><b>????????????</b></p>
								<p>???????????? : ??????, ????????????, ????????????, ????????????, ???????????????</p>
								<p>???????????? : ????????????, ????????????, ????????????, ????????????, ??????????????????</p>
								<p>???, ??????????????? ??????????????? ???????????????, ????????????????????? ?????? ?????? ?????? ?????? ???????????????.</p>
								<p><b>???????????? ????????????</b><p>
								<p>???????????????????????? ????????? ?????? ???????????? ??????????????? ????????? ??? ????????????.</p>
								<p>- PC ?????? ????????? ???????????? ????????????, ??????, ????????????</p>
							</div>

							<div class="yac_con" id="tab_2" style="border:1px solid #000;">
								<h4>??? ??????????????? ?????? ??? ????????????</h4>
								<p>????????? ??????????????? ????????? ????????? ?????? ???????????????.</p>
								<p>- ????????? ????????? ?????? ?????? ??????</p>
								<p>- ????????????</p>
								<p>- ???????????? ???????????? ??????, ??????????????? ??????, ????????? ????????? ?????? ?????????????????? ??????</p>
								<p>- ?????? ?????? ?????? ?????? ????????? ????????? ????????? ?????? ??????</p>
								<p><b>?????? ??????</b></p>
								<p>????????? ????????? ????????? ?????? ???????????? , ?????? ?????? , ??????
								????????? ?????? ?????? ????????? ????????? ?????? ?????? , ?????? ?????? ?????? ,
								???????????? , ???????????? ??? ???????????? , ???????????? ?????? </p>
								<p><b>????????? ??? ????????? ??????</b></p>
								<p>????????? ??? ????????? ?????? ?????? , ?????? ?????? ?????? ?????? ????????? ????????? ????????? ?????? ?????? </p>
							</div>

							<div class="yac_con" id="tab_3" style="border:1px solid #000;">
								<h4>??? ??????????????? ?????? ??? ????????????</h4>
								<p>???????????????, ???????????? ?????? ??? ??????????????? ????????? ????????? ?????? ????????? ?????? ?????? ???????????????. </p>
								<p>???, ??????????????? ????????? ????????? ????????? ????????? ?????? ?????? ????????? ????????? ?????? ?????????????????? ?????? ????????? ?????? ?????? ??????????????? ???????????????.</p>
								<p>&nbsp;</p>
								<p><b>?????? ?????? : </b> ????????????</p>
								<p><b>?????? ?????? : </b>?????? ?????? ???????????? ?????? ?????? ??????</p>
								<p><b>?????? ?????? : </b>3???</p>
								<p><b>?????? ?????? ???????????? ?????? ?????? ?????? : </b>5??? (??????????????????????????? ?????????????????? ?????? ??????)</p>
								<p><b>???????????? ??? ?????? ?????? ????????? ?????? ?????? : </b>5??? (??????????????????????????? ?????????????????? ?????? ??????)</p>
								<p><b>???????????? ?????? ?????? ??????????????? ?????? ?????? : </b>3??? (??????????????????????????? ?????????????????? ?????? ??????)</p>
							</div>
						</div>
					</div>
				</div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="checkInput();">?????? ????????????</button>
          </div>
        </div>
      </div>
    </div>

    <div class="fix_btn">
        <ul>
            <li>
            	<button type="button" class="btn btn-primary bt2" data-toggle="modal" data-target="#application_form">
                </button>
            </li>
        </ul>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<!-- End of .container -->
<script type="text/javascript">

    function checkInput() {
        var form = $("#myform");
        var kbn='true';
        if($('#stu_name').val() == '') {
            alert("????????? ???????????????");
            $('#stu_name').focus();
            return false;
        }else if($('#stu_tel_02').val() == '') {
            alert("??????????????? ????????? ?????????");
            $('#stu_tel_02').focus();
            return false;
        }else if($('#stu_tel_03').val() == '') {
            alert("??????????????? ????????? ?????????");
            $('#stu_tel_03').focus();
            return false;
        }else if($('#stu_addr').val() == '') {
            alert("??????????????? ??????????????????");
            $('#stu_addr').focus();
            return false;
        }else if(!$('#agree').is(':checked')) {
            alert("???????????? ????????? ??????????????????");
            $('#agree').focus();
            return false;
        }

        $(function(){
            var $form = $("#myform");
            var params = $form.serialize();
            $.ajax({
                type: "post",
                url: "/RnQuickAct",
                data: params,
                contentType : "application/x-www-form-urlencoded;charset=utf-8",
                success: function(rtnData){
					console.log(rtnData);
                    if(rtnData == 'ok'){
                        alert("??????????????? ?????????????????????.");
                    }else{
                        alert("????????? ???????????? ???????????????. ????????? ?????? ????????? ?????????.");
                    }

                $form.find("textarea, select, text").val("");

                },
                complete : function(){

                },
                error : function(xhr, status, error){
                	alert(error);
                	console.log(xhr);
                	console.log(status);
                	console.log(error);
                }
            });
        });
    }

	$(".yac_Btn").click(function(){
		$(".yac_more").slideToggle(500);
		$(".yac_Btn").css("display","none");
		$(".yac_Btn_cl").css("display","inline-block");
		span_view('1');
	});
	$(".yac_Btn_cl").click(function(){
		$(".yac_more").slideToggle(500);
		$(".yac_Btn").css("display","inline-block");
		$(".yac_Btn_cl").css("display","none");
	});

	function span_view(a){
		for(var i="1"; i<"4"; i++){
			document.getElementById('tab_'+i).style.display="none";
			document.getElementById('btn_'+i).style.background="#ddd";
			document.getElementById('btn_'+i).style.color="#222";
		}
		document.getElementById('tab_'+a).style.display="block";
		document.getElementById('btn_'+a).style.background="#7591f8";
		document.getElementById('btn_'+a).style.color="#fff";
	}

	$( document ).ready(function() {
       $(".yac_Btn_cl").click();
    });
</script>
