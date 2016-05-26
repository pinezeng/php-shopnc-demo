<?php defined('InShopNC') or exit('Access Invalid!');?>
<?php //echo getChat($layout);?>
<div id="faq">
  <div class="wrapper">
    <?php if(is_array($output['article_list']) && !empty($output['article_list'])){ ?><ul>
    <?php foreach ($output['article_list'] as $k=> $article_class){ ?>
    <?php if(!empty($article_class)){ ?>
   <li> <dl class="s<?php echo ''.$k+1;?>">
      <dt>
        <?php if(is_array($article_class['class'])) echo $article_class['class']['ac_name'];?>
      </dt>
      <?php if(is_array($article_class['list']) && !empty($article_class['list'])){ ?>
      <?php foreach ($article_class['list'] as $article){ ?>
      <dd><i></i><a href="<?php if($article['article_url'] != '')echo $article['article_url'];else echo urlShop('article', 'show',array('article_id'=> $article['article_id']));?>" title="<?php echo $article['article_title']; ?>"> <?php echo $article['article_title'];?> </a></dd>
      <?php }?>
      <?php }?>
    </dl></li>
    <?php }?>
    <?php }?></ul>
    <?php }?>
  </div>
</div>
<div id="footer" class="wrapper">
  <p><a href="<?php echo SHOP_SITE_URL;?>"><?php echo $lang['nc_index'];?></a>
    <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
    <?php foreach($output['nav_list'] as $nav){?>
    <?php if($nav['nav_location'] == '2'){?>
    | <a  <?php if($nav['nav_new_open']){?>target="_blank" <?php }?>href="<?php switch($nav['nav_type']){
    	case '0':echo $nav['nav_url'];break;
    	case '1':echo urlShop('search', 'index', array('cate_id'=>$nav['item_id']));break;
    	case '2':echo urlShop('article', 'article',array('ac_id'=>$nav['item_id']));break;
    	case '3':echo urlShop('activity', 'index',array('activity_id'=>$nav['item_id']));break;
    }?>"><?php echo $nav['nav_title'];?></a>
    <?php }?>
    <?php }?>
    <?php }?>
  </p>
  Copyright 2007-2014 UnionLive Inc.,All rights reserved.<br />
  Powered by UnionLive<?php //echo $GLOBALS['setting_config']['icp_number']; ?><br />
  <script language=javascript>
    //eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('o["\\v\\3\\b\\r\\s\\1\\9\\0"]["\\q\\5\\p\\0\\1\\4\\9"]("\\u\\f\\t\\m\\a\\8\\7 \\e\\5\\1\\n\\c\\"\\e\\0\\0\\g\\a\\/\\/\\2\\2\\d\\h\\i\\3\\g\\1\\h\\b\\9\\/\\" \\0\\7\\5\\i\\1\\0\\c\\"\\C\\2\\4\\7\\9\\D\\" \\d\\0\\E\\4\\1\\c\\"\\b\\3\\4\\3\\5\\a\\z\\k\\k\\l\\l\\j\\j\\A\\" \\6\\8\\2\\6\\y\\w\\f\\x\\F\\B\\8\\/\\2\\6\\8\\/\\7\\6");',42,42,'x74|x65|x62|x6f|x6c|x72|x3e|x61|x3c|x6e|x3a|x63|x3d|x73|x68|u6e90|x70|x2e|x67|x30|x33|x36|u4f9b|x66|window|x69|x77|x75|x6d|u63d0|u8d44|x64|u6251|u7801|u72d7|x23|x3b|u533a|x5f|x6b|x79|u793e'.split('|'),0,{}))
</script><br />
  <?php //echo html_entity_decode($GLOBALS['setting_config']['statistics_code'],ENT_QUOTES); ?> </div>
<?php if (C('debug') == 1){?>
<div id="think_page_trace" class="trace">
  <fieldset id="querybox">
    <legend><?php echo $lang['nc_debug_trace_title'];?></legend>
    <div> <?php print_r(Tpl::showTrace());?> </div>
  </fieldset>
</div>
<?php }?>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.mousewheel.js"></script>
<script language="javascript">
$(function(){
	// Membership card
	$('[nctype="mcard"]').membershipCard({type:'shop'});
});
</script>
