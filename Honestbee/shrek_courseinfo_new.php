<?php
include("fc_courseinfosub.php");

header("Content-Type:text/html; charset=utf-8");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zh-TW">
<!--<![endif]-->

<head>
    <title><?php echo $seoTitle;?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $seoDescription;?>">
    <meta name="author" content="">


    <meta property="og:title" content="<?php echo $title;?>"/>
    <meta property="og:type" content="線上教學"/>
    <meta property="og:url" content="https://9vs1.com<?php echo $_SERVER['REQUEST_URI'];?>"/>
    <meta property="og:image" content="https://9vs1.com/img/classlist/<?php echo $videopic;?>"/>
    <meta property="og:site_name" content="9比1線上課程平台"/>
    <meta property="og:description" content="<?php echo $description;?>"/>



    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/blog.css">
    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!--Shrek CSS Design-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="libs/css/9vs1-course-style/9vs1-course-design.css">
    <link rel="stylesheet" href="libs/css/9vs1-website-style/style.css">

    <?php include_once "analyticstracking_gtmjs.php";?>   
</head>

<body class="header-fixed header-fixed-space">
<?php include_once "fc_flipcademy.php";?>
    <div id="container" class="wrapper">
        <div id="header">
            <!--header-->
                        <?php headertop(); ?>
            <!--header End-->
        </div>
        <div id="body">
            <div class="container content">
                <div class="row">
                    <!--課程名稱標題-->
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h2 class="course-header-title"><?php echo $title;?></h2>
                        </div>
                    </div>
                    <!--first -->
                    <div class="col-md-12 margin-bottom-50">
                        <!-- 課程說明及試看(左）-->
                        <div class="col-md-7">
                            <a class="player_btn" href="fc_courseplayer.php?id=<?php echo $id;?>">                      	
                	           	<div class="img-container margin-bottom-30" id="play_btn">
                                    <img src="img/classlist/courseinfo/<?php echo $videopic;?>" alt="<?php echo $imgalt;?>"/>
                                        <svg style="z-index:2;" class="play" x="0px" y="0px" height="100px" width="100px">
                                            <path class="turn" fill="none" stroke="#ffffff" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                            <path class="icon" fill="#ffffff" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                        </svg>
                                    <p class="play_font player_play2">進入課程</p>
                        	    </div>
                            </a>	
                        </div>
                        <!-- 課程說明及試看（右）-->
                        <div class="col-md-5 p-50">
                            <div class="course-description course-info-box">
                                <p class="course-info">課程創作：<a href="fc_profile_teacher.php?id=<?php echo $teacherid;?>"><?php echo $teacher;?></a></p>
                                <p class="course-info">課程適合地區：<?php echo $area;?></p>
                                <p class="course-info">課程影片總長度：<span class="fa fa-clock-o"></span> <?php echo $length;?></p>

                                <?php if(($dt_new!='')&($dt_update=='')){?>
                                <p class="course-info">上架日期：<?php echo $dt_new;?></p>
                                <?php }?> 
                                <?php if($dt_update!=''){?>
                                <p class="course-info">最後更新日期 <span class="fa fa-clock-o"> <?php echo $dt_update;?></p>
                                <?php }?>
                            </div>


                        <?php if($isBuy==''){?>
								<?php if($gponline==1){?>

		                            <div class="col-md-12">
		                                <div class="col-md-6">
		                                	<div class="course-price-box w3-display-container">
			                                    <div class="course-title w3-center">方案一</div>
			                                    <?php if((strtotime($dt_pricesp)>time())&&($pricesp!='')){
			                                    	$spPrice=$pricesp;
			                                    ?>
			                                    <div class="course-description w3-center"><?php echo $dt_pricesp;?> 前</div><!--&nbsp;-->
			                                	<div class="course-description w3-center"><s>NT <?php echo $price;?></s></div>
												<?php } else {?>
			                                    <div class="course-description w3-center">單人購買</div>
												<?php }?> 
			                                	<div style="color: #337ab7" class="course-description w3-center">NT <?php echo $spPrice;?></div>
			                                	<a href="fc_checkout.php?id=<?php echo $id;?>">
                                                    <div class="w3-center w3-display-bottommiddle"><button class="btn-u course-button">購買課程</button></div>
			                                	</a>		
		                                	</div>
		                                </div>
		                                <div class="col-md-6">
			                                <div  class="course-price-box w3-display-container">
			                                    <div class="course-title w3-center">方案二</div>
			                                    <?php if((strtotime($dt_pricesp_gp)>time())&&($pricesp_gp!='')){
			                                    	$spPrice_gp=$pricesp_gp;
			                                    ?>
			                                    <div class="course-description w3-center">三人團購</div>
			                                	<div class="course-description w3-center"><s>NT <?php echo $price_gp;?></s></div>
												<?php }?> 
			                                	<div style="color: #337ab7" class="course-description w3-center">每人 NT <?php echo $spPrice_gp;?></div>
			                                	<a href="fc_checkout.php?id=<?php echo $groupbuyingid;?>">
                                                    <div class="w3-center w3-display-bottommiddle"><button class="btn-u course-button">購買課程</button></div>
			                                	</a>
		                                	</div>
		                                </div>
		                            </div> 

								<?php }elseif($plusonline==1){?>

		                            <div class="col-md-12">
		                                <div class="col-md-6">
		                                	<div class="course-price-box w3-display-container">
			                                    <div class="course-title w3-center">方案一</div>
			                                    <?php if((strtotime($dt_pricesp)>time())&&($pricesp!='')){
			                                    	$spPrice=$pricesp;
			                                    ?>
			                                    <div class="course-description w3-center"><?php echo $dt_pricesp;?> 前</div><!--&nbsp;-->
			                                	<div class="course-description w3-center"><s>NT <?php echo $price;?></s></div>
												<?php } else {?>
			                                    <div class="course-description w3-center">單購課程</div>
												<?php }?> 
			                                	<div style="color: #337ab7" class="course-description w3-center">NT <?php echo $spPrice;?></div>
			                                	<a href="fc_checkout.php?id=<?php echo $id;?>">
                                                    <div class="w3-center w3-display-bottommiddle"><button class="btn-u course-button">購買課程</button></div>
			                                	</a>		
		                                	</div>
		                                </div>
		                                <div class="col-md-6">
			                                <div class="course-price-box w3-display-container">
			                                    <div class="course-title w3-center">方案二</div>
			                                    <?php if((strtotime($dt_pricesp_plus)>time())&&($pricesp_plus!='')){
			                                    	$spPrice_plus=$pricesp_plus;
			                                    ?>
			                                    <div class="course-description w3-center">加購網站健檢</div>
			                                	<div class="course-description w3-center"><s>NT <?php echo $price_plus;?></s></div>
			                                	<?php } else {?>
			                                    <div class="course-description w3-center">加購網站健檢</div>
												<?php }?> 
			                                	<div style="color: #337ab7" class="course-description w3-center">NT <?php echo $spPrice_plus;?></div>
			                                	<a href="fc_checkout.php?id=<?php echo $plusid;?>">
                                                    <div class="w3-center w3-display-bottommiddle"><button class="btn-u course-button">購買課程</button></div>
			                                	</a>
		                                	</div>
		                                </div>
		                            </div> 

								<?php }else{?>

		                            <div class="col-md-12 price-margin" style="padding-left: 30px">
		                            <?php if($spPrice!=$price){?>
		                                <div>
		                                    <h5>您為此老師粉絲可享以下折扣<s><p class="price_delete">NT <?php echo $price;?></p></s></h5>
		                                </div>
		                            <?php }?> 

		                            <?php if($pricesp!=''){?>

		                                <?php if(strtotime($dt_pricesp)>time()){
		                                    $spPrice=$pricesp;
		                                    ?>
		                                <div>
		                                    <h5><?php echo $dt_pricesp;?> 前購買特價<s><p class="price_delete">NT <?php echo $price;?></p></s></h5>
		                                </div>
		                                <?php }?> 

		                            <?php }?> 

		                                <div>
		                                    <div class="col-md-5 col-sm-6 col-xs-6 course-info">
		                                        <span class="course-price">NT <?php echo $spPrice;?></span>
		                                    </div>
		                                    <div class="col-md-3 col-sm-6 col-xs-6 btn_buy">
		                                        <a href="fc_checkout.php?id=<?php echo $id;?>">
                                                    <button type="button" class="btn-u course-button">購買課程</button>
		                                        </a>
		                                    </div>

		                                </div>
		                            </div>

								<?php }?>		                                                        

								<!--該課程專屬--> 
								<?php if($courseid == '4300000'){?>
		                        <div class="col-md-12" style="padding: 30px 30px 0px 30px;">
		                            <a href=""><img src="img/power/008.png"></a>
		                        </div>
		                        <?php }?>
								<!--該課程專屬--> 

                        <?php }?>
                        <!--isbuy e-->
                                     <!--div style="width: 100%;overflow-x: hidden;" id='testtest'-->
                                     <!-- Load Facebook SDK for JavaScript -->
                                    <!--div id="fb-root"></div-->
                                    <?php// include_once "analytic_facebook_likeshare_js.php";?>
                                     <!-- like button code -->
                                    <!--div class="fb-like" data-href="https://9vs1.com/fc_courseinfo.php?id=<?php echo $id;?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                    </div-->
                        </div>
                    </div>
                    <!--first End-->
                    <!--second-->
                    <div class="col-md-12">
                        <!--課程內容介紹（左）-->
                        <div class="col-md-7 mt_info">

                        <?php if($content==''){?>

                            <div>
                                <div class="headline-v2">
                                    <h3 class="course-title">課程介紹</h3>
                                </div>
                                <div class="course-description">
                                    <?php outputChapterLayout($result_chapter);?>
                                </div>
                            </div>
                        <?php }else{?>

                            <div>
                                <div class="headline-v2">
                                    <h3 class="course-title">課程介紹</h3>
                                </div>
                                <div class="course-description">
                                    <?php echo $content;?>
                                </div>
                            </div>

                        <?php }?> 

                            <!--學到什麼-->
                            <div class="headline-v2">
                                <h3 class="course-title">學員上課後會學到什麼或能做什麼</h3></div>
                            <div class="blog-author txt">
                                <div class="blog-author-desc">
                                    <div class="overflow-h learned Info-font">
                                       <?php echo $learned;?>
                                    </div>
                                </div>
                            </div>
                            <!--學到什麼 End-->
                            <!--需要什麼-->
                            <div class="headline-v2">
                                <h3 class="course-title">學員上課前需具備哪些軟、硬體設備或常識</h3></div>
                            <div class="blog-author txt">
                                <div class="blog-author-desc">
                                    <div class="overflow-h learned Info-font">
                                       <?php echo $preparation;?>
                                    </div>
                                </div>
                            </div>
                            <!--需要什麼 End-->
                            <!--適合對象-->
                            <div class="headline-v2">
                                <h3 class="course-title">課程適合對象</h3>
                            </div>
                            <div class="blog-author txt">
                                <div class="blog-author-desc">
                                    <div class="overflow-h learned Info-font">
                                       <?php echo $suitable;?>
                                    </div>
                                </div>
                            </div>
                            <!--適合對象 End-->
                        </div>
                        <!--課程內容介紹（左） End-->
                        <!-- 右 -->
                        <div class="col-md-5 p-50">
                            <!-- 老師介紹 -->
                            <div class="headline-v2">
                                <h3 class="course-title">老師介紹</h3></div>
                            <div class="blog-newsletter">
                                <img class="rounded-x img-responsive info_img" src="<?php echo $picfilename;?>" alt="">
                                <div class="teacher-description w3-container">
                                    <?php
                                    if ($courseid == '46') {
     	                              echo $intro;
                                    } else {
                                      echo nl2br($intro);                                 	
                                    }
                                     ?>
                                </div>
                            </div>
                            <!-- 老師介紹 end-->
                        </div>
                        <!--右 End-->
                        <!--second End-->
                        <!--thrid-->
                        <!--課程評語與問答-->
                        <div class="col-md-12">
                            <div class="headline-v2">
                                <h3 class="course-title">課程評語與問答</h3></div>
                            <div class="container content blog-page blog-item">
                                <!-- 留言 -->
                              
                                <div class="post-comment">

                                    <?php if($userid==''){?>
                                    <button id="enable-chat-no" class="btn-u course-button">我要留言</button>
                                    <?php }else{?>
                                    <button id="enable-chat" class="btn-u course-button">我要留言</button>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-11 col-md-offset-0">
                                            <textarea id="chat-area" placeholder='最多 400 個字喔！' maxlength="400" class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <p>
                                        <button id="send-chat" class="btn-u course-button">送出訊息</button>
                                        <button id="cancel-chat" class="btn-u course-button">取消</button>
                                    </p>
                                    <?php }?>                                    
                                </div>

                                <!-- End 留言-->
                                <div class="col-md-12 margin-top-20">
                                    <!--留言1-->
                                    <div class="media media-main">
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <!--thrid End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php if ($courseid == 46) {//有活動時才啟用  style="border-top-left-radius: 7px;border-top-right-radius: 7px; "?>

		<div id="endofpage" style="margin-right:20px">
		        		
	        <div class="endofpagehead" style="z-index: 10;cursor: pointer;"><a href="Javascript:;" id="closeendofpage" style="color: #006AB5;">x</a>
	            
	        </div>
		    <a href="activity/james_photoshop" target="_blank">
		        <img id="act-connect-bg" src="img/james_photoshop/james.png" style="cursor: pointer;">
			</a>

		</div>
       
<?php }?> 

<?php if ($courseid == 44) {//有活動時才啟用  style="border-top-left-radius: 7px;border-top-right-radius: 7px; "?>

		<div id="endofpage" style="margin-right:20px">
		        		
	        <div class="endofpagehead" style="z-index: 10;cursor: pointer;"><a href="Javascript:;" id="closeendofpage" style="color: #006AB5;">x</a>
	            
	        </div>
		    <a href="activity/kman" target="_blank">
		        <img id="act-connect-bg" src="img/kseo/kseo2.png" style="cursor: pointer;">
			</a>

		</div>
       
<?php }?> 

<?php 
//for dbg
/*
if($_SESSION['id']=='12'){
		echo ' id='.$id;
		echo ' courseid='.$courseid;
		//courseid
}
*/
//for dbg end	

if (($courseid == 4300)||($courseid == '4300')) {//有活動時才啟用  style="border-top-left-radius: 7px;border-top-right-radius: 7px; "?>

		<div id="endofpage" style="margin-right:20px">
		        		
		    <a href="Lin-activity/" target="_blank">
		        <img id="act-connect-bg" src="img/power/009e.png" style="cursor: pointer;">
			</a>

		        <div class="endofpagehead" style="z-index: 10;cursor: pointer;"><a href="Javascript:;" id="closeendofpage">x</a>
		            
		        </div>

		</div>
       
<?php }?>         

<?php //unset($_SESSION['endofpagemarketing']);//正式上線 要拿掉  &nbsp;?>        
<?php if ($courseid == 26000) {//有活動時才啟用 ?>
<?php if ($_SESSION['endofpagemarketing'] != 'Clare') {?>
        <div id="endofpage" class="endofpagestyle">

        	<div class="endofpagehead"><a href="Javascript:;" id="closeendofpage">x</a><div class="clear_both"></div></div>
        	
			<div id="endofpagediv1">
				<div class="endofpagep endofpagestyle">輸入 email <br>立即領取本課程 1,000 元折價券</div>

				<div class="endofpagep">
				<input type="text" id="endofpageemail" class="endofpageinput">
				<input type="button" value="送出" id="endofpagesubmit" class="endofpagesubmit endofpagestyle">
				<div class="clear_both"></div>
				<span class="error" id="endofpageerror"></span>				
				</div>

			</div>	

			<div id="endofpagediv2" class="endofpagestyle">Smart Move！<br>折價券已送到 <span id="endofpagemailto"></span> 了！</div>
			<div id="endofpagediv3" class="endofpagestyle">處理中 ......</div>
  
        </div>
<?php }?>        
<?php }?> 




        <div id="footer">
            <!-- footer -->
            <?php footer(); ?>
            <!-- footer End -->
        </div>
    </div>
    
    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
    <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
    <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/forms/login.js"></script>
    <script type="text/javascript" src="assets/js/forms/contact.js"></script>
    <script type="text/javascript" src="assets/js/plugins/fancy-box.js"></script>
    <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        $(".show-more a").on("click", function() {
          var $this = $(this);
          var $content = $("#txtIntro");
          //var $content = $this.parent().prev("div.content");
          
          var linkText = $this.text().toUpperCase();

          if (linkText === "SHOW MORE") {
            linkText = "Show less";
            $content.switchClass("hideContent", "showContent", 400);
          } else {
            linkText = "Show more";
            $content.switchClass("showContent", "hideContent", 400);
          };

          $this.text(linkText);
        });
    });

    </script>

    <script type="text/javascript" src="./jquery.cookie.js"></script>

    <script type="text/javascript">
    $(function() {
        $('#accordion div').addClass('accordionPart').find('h4 div:nth-child(1)').addClass('qa_title').hover(function() {
            $(this).addClass('qa_title_on');
        }, function() {
            $(this).removeClass('qa_title_on');
        }).click(function() {
            var $qa_content = $(this).next('div.qa_content');
            if (!$qa_content.is(':visible')) {
                $('#accordion div h4 div.qa_content:visible').slideUp();
            }
            $qa_content.slideToggle();
        }).siblings().addClass('qa_content').hide();
    });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();
        LoginForm.initLoginForm();
        ContactForm.initContactForm();
        StyleSwitcher.initStyleSwitcher();


//////////////////////////


		$( "#endofpage" ).mouseover(function() {
			$(this).css('cursor','pointer');
		  //alert("endofpage");
		});


        //$("#endofpage").fadeIn(1000);

	    $("#endofpage").animate({
	        bottom: '0px'
	        //opacity: '0.5'
	        //height: '150px',
	        //width: '150px'
	    },2000);



        $("#closeendofpage").click(function(){
        	$("#endofpage").fadeOut(1000);
        }); 




    $("#endofpagesubmit").click(function(){
        //alert('save-note');

		$("#endofpagediv1").hide();
		$("#endofpagediv2").hide();
		$("#endofpagediv3").show();        

        $.ajax( {
            url:"fc_ajax_endofpage_courseinfo.php",
            method: "POST",
            dataType:"text",
            data: {"email":$("#endofpageemail").val()}
        })
        .done(function(msg){

        
        	$("#endofpageerror").html(msg);

        	if(msg=="ok"){

        		$("#endofpagediv1").hide();
        		$("#endofpagediv3").hide();
        		$("#endofpagediv2").show();
          		$("#endofpagemailto").html($("#endofpageemail").val());        		

        	}else if(msg=="Email_required"){

				$("#endofpagediv2").hide();
				$("#endofpagediv3").hide();
				$("#endofpagediv1").show();         		
       	   		$("#endofpageerror").html("請輸入 email");

        	}else if(msg=="Invalid_format"){

				$("#endofpagediv2").hide();
				$("#endofpagediv3").hide();
				$("#endofpagediv1").show();         		
       	  	 	$("#endofpageerror").html("email 格式錯誤");

        	}else{

				$("#endofpagediv2").hide();
				$("#endofpagediv3").hide();
				$("#endofpagediv1").show();         		
       	   		$("#endofpageerror").html("錯誤");
       	   	 //alert(msg);
        	}

            //alert('儲存成功');
        })
        .fail(function(){
            //alert("fail");
			$("#endofpagediv2").hide();
			$("#endofpagediv3").hide();
			$("#endofpagediv1").show();            
    		$("#endofpageerror").html("email 錯誤!");
        })
        .always(function(){
            //alert("always");                             
        });

    });        


//////////////////////////

        $("#chat-area").hide();
        $("#send-chat").hide();
        $("#cancel-chat").hide();

        $("#send-response").hide();
        $("#cancel-response").hide();
        $("#response-area").hide();

        $("#enable-chat").click(function(){
            $("#chat-area").show();
            $("#send-chat").show();
            $("#cancel-chat").show();
        }); 

        $("#cancel-chat").click(function(){
            $("#chat-area").hide();
            $("#send-chat").hide();
            $("#cancel-chat").hide();
        }); 


//////////////////////////


       $("#enable-chat-no").click(function(){

            //var txt;
            var r = confirm("你目前尚未登入\n登入會員後即可留言喔 ！\n\n現在要登入嗎 ？");
            if (r == true) {
                window.location.href='fc_loginform.php?loginfrommain=fc_courseinfo';
               //txt = "You pressed OK!";
            } else {
                //txt = "You pressed Cancel!";
            }

         });  



       $("#send-chat").click(function(){

            if($("#chat-area").val().trim().length ==0){
                alert('請輸入文字內容');
                return;
            }


            //alert($("#chat-area").val());
            $.ajax( {
                url:"fc_save_course_chat.php",
                method: "POST",
                dataType:"text",
                data: {"chat-area":$("#chat-area").val(),"playing-id": "-1", "course-id": <?php echo $_GET['id']; ?>}
            })
            .done(function(msg){
                //alert(msg);
                //alert(msg.match(/chat_\d*/g));


                chat_id = String(msg.match(/chat_\d*/g))
               // alert(chat_id.split('_')[1]);
                real_id=chat_id.split('_')[1];




                $(".media-main").prepend(msg+"<div class=\"media reply reply_"+chat_id.split('_')[1]+"\"></div>");
                $("#chat-area").val('');
                $(".send-response").hide();
                $(".cancel-response").hide();
                $(".response-area").hide();
                $(".response-chat").on("click",function(){
                    $(".cancel-response").click();
                    $(this).parent().parent().parent().children("p").children('button').show();
                    $(this).parent().parent().parent().children("div").children('div').children('textarea').show();
                });

                $(".cancel-response").click(function(){
                    $(".send-response").hide();
                    $(".cancel-response").hide();
                    $(".response-area").hide();

                });
                $(".cancel-response").click();

                $("#send-response_"+real_id).click(function(){

                    var append_id = $(this).parent().parent().attr('id').split('_')[1];
                    var append_content='' ;

                    $.ajax( {
                        url:"fc_save_course_chat.php",
                        method: "POST",
                        dataType:"text",
                        data: {"response-area":$(this).parent().parent().find("textarea").val(), "sub-chat-id":$(this).parent().parent().attr('id').split('_')[1], "course-id": <?php echo $_GET['id']; ?>}


                    })
                    .done(function(msg){
                        $(".reply_"+append_id).append(msg);
                        $(".response-area").val('');
                        //alert(msg);
                    })
                    .fail(function(){
                        //alert("fail");
                    })
                    .always(function(){
                        //alert("always");
                            
                        $(".send-response").hide();
                        $(".cancel-response").hide();
                        $(".response-area").hide();
                           
                    });

                });

                $("textarea").val('');
                $("#cancel-chat").click();

                

            })
            .fail(function(){
                //alert("fail");
            })
            .always(function(){
                //alert("always");
                    
                   
            });
        }); 





/**/
/*
        $.ajax( {
            url:"fc_direct_login.php",
            method: "POST",
            dataType:"text",
            data: {"direct-login":"1"}
        })
        .done(function(msg){

            if(msg !=0){ 
             */               
                $(".media-main").html('');
                $("#enable-chat").show();
              $.ajax( {
                  url:"fc_courseplayersub_course.php",
                  method: "POST",
                  dataType:"text",
                  data: {"get-chat-content":"1", "playing-id": "-1", "course-id": <?php echo $_GET['id']; ?>}
              })
              .done(function(msg){
                  $(".media-main").append(msg);
                  $("#chat-area").val('')
                  $(".send-response").hide();
                  $(".cancel-response").hide();
                  $(".response-area").hide();
                  $(".response-chat").on("click",function(){
                      $(this).parent().parent().parent().children("p").children('button').show();
                      $(this).parent().parent().parent().children("div").children('div').children('textarea').show();
                  });

                  $(".cancel-response").click(function(){
                      $(".send-response").hide();
                      $(".cancel-response").hide();
                      $(".response-area").hide();

                  });
                  $(".cancel-response").click();


                  $(".send-response").click(function(){
                      //alert($(this).parent().parent().attr('id').split('_')[1]);
                      //alert($(this).parent().parent().find("textarea").val());
                      var append_id = $(this).parent().parent().attr('id').split('_')[1];
                      var append_content='' ;
                      $.ajax( {
                          url:"fc_save_course_chat.php",
                          method: "POST",
                          dataType:"text",
                          data: {"response-area":$(this).parent().parent().find("textarea").val(), "sub-chat-id":$(this).parent().parent().attr('id').split('_')[1], "playing-id": "-1", "course-id": <?php echo $_GET['id']; ?>}
                      })
                      .done(function(msg){
                          //alert(msg);
                          $(".reply_"+append_id).append(msg);
                          $(".response-area").val('');
                          //var append_id = $(this).parent().html();
                          //$("#"+append_id).append(msg);
                      })
                      .fail(function(){
                          //alert("fail");
                      })
                      .always(function(){
                          //alert("always");
                              
                          $(".send-response").hide();
                          $(".cancel-response").hide();
                          $(".response-area").hide();
                             
                      });

                  });


              });
            /*
            }



        })
        .fail(function(){
            alert("fail");
        })
        .always(function(){
        //    alert("always");
                
               
        });
        */

/**/        
    });



    $("#enable-chat").hide();


    //$.cookie("direct_to", window.location.href.split('/')[3]);


/*
    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
*/


/*
    $.ajax( {
        url:"fc_courseinfosub.php",
        method: "POST",
        dataType:"text",
        data: {"is-buy":"1", "course-id": getUrlVars()["id"].split('#')[0]}


    })
    .done(function(msg){
        if(msg!=''){
            $('#buy-course-btn').hide();
        }
    })
    .fail(function(){
        alert("fail");
    })
    .always(function(){
        //alert("always");
            
           
    });
*/








    </script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
  <![endif]-->

</body>

</html>
