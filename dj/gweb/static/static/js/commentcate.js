$.fn.extend({  
   common:function(pageid,team_id,type){
       var datahtml = '';
	   if(type==''){
		    var action='comment';
	   }else{
		    var action='commentcate';
	   }
       $.post("/ajax/ajaxfront.php?action="+action+"&type=user",
        { 
        pageid : pageid,
        team_id : team_id,
		type:type,
        }
        , function(data){
            if(data['result']==1)
            {
               $("#curpage").val(pageid);
               $.each(data['data'], function(i, item){    
               datahtml = datahtml + '<li>'+
                	'<div class="mx_pic_tx"><img src="'+
                	((data['avatar'][item['user_id']]==null)?"/static/img/user-no-avatar.gif":("static/"+data['avatar'][item['user_id']]))+
                	'" /></div>'+
					'<div class="mx_ping_t">'+
					'<span>'+item["username"]+'<i>--------'+item['add_time']+'</i></span>'+
					'<p>'+item['content']+'</p>'+
					'</div>';
               if(item['reply']!=null && item['reply_time']!=null)
               {
               datahtml = datahtml + 
			   '<div class="mx_ping_b">'+
						'<span>管理员<i>--------'+item["reply_time"]+'</i></span>'+
                        '<p>'+item['reply']+'</p>'+
					'</div>';
               }
               datahtml = datahtml + '</li>'; 
               }); 
               $(".mx_xp_ping").html(datahtml); 
            }
            else
            {
                
            }
        },'json');
   },
   firstbtn:function(team_id,totalpage,type){
       //更改标识为1
       $.fn.common(1,team_id,type);
       $('.mx_fenye').children('span').removeClass("po de");
       $('#last,#next').addClass("po");
       $('#first,#prev').addClass("de");
   },
   prevbtn:function(team_id,totalpage,type){
       var pageid = parseInt($("#curpage").val())-1;
       pageid = (pageid<=0)?1:pageid;
       $.fn.common(pageid,team_id,type);
       if(pageid==1)
       {
          $('.mx_fenye').children('span').removeClass("po de");
          $('#first,#prev').addClass("de"); 
          $('#last,#next').addClass("po"); 
       }else{
          $('.mx_fenye').children('span').removeClass("po de");
          $('.mx_fenye').children('span').addClass("po"); 
       }      
   },
   nextbtn:function(team_id,totalpage,type){
       var pageid = parseInt($("#curpage").val())+1;
       pageid = (pageid>=totalpage)?totalpage:pageid;
       $.fn.common(pageid,team_id,type);
       if(pageid==totalpage)
       {
          $('.mx_fenye').children('span').removeClass("po de");
          $('#last,#next').addClass("de"); 
          $('#first,#prev').addClass("po"); 
       }else{
          $('.mx_fenye').children('span').removeClass("po de");
          $('.mx_fenye').children('span').addClass("po"); 
       }     
   },
   lastbtn:function(team_id,totalpage,type){
       this.common(totalpage,team_id,type);
       $('.mx_fenye').children('span').removeClass("po de");
       $('#last,#next').addClass("de");
       $('#first,#prev').addClass("po");         
   }
});
/***评价分页面处理***/
   $("#last").on("click",function(){
      $.fn.lastbtn(team_id,totalpage,type);
   });
   $("#next").on("click",function(){
      $.fn.nextbtn(team_id,totalpage,type); 
   });
   $("#prev").on("click",function(){
       $.fn.prevbtn(team_id,totalpage,type); 
   });
   $("#first").on("click",function(){
       $.fn.firstbtn(team_id,totalpage,type); 
   });
/***************/
$(function(){
	(function($){
		var $box=$('.mx_xp');
		var $li=$box.find('.mx_xp_ul').find('li');
		var $div=$box.find('.mx_xp_div');
		$li.on('click',function(){
			$(this).addClass('active').siblings().removeClass('active');
			$div.hide().eq($(this).index()).show();
		})
	})(jQuery);	
});
$(document).ready(function(){
    $("#pro_add").click(function(){
            $.post("order/commentcate.php",{
                content:$('#p_content').val(),
                id:$('#pid').val(),
                category:$('#p_cate').val()
            },function(data){
                if(data['result']==1){
                    alert("评论添加成功");
                    window.location.reload();
                }else if(data['result']==3){
                    alert("您已发表评论,不能在继续添加！！");
                }else if(data['result']==4){
                    $.layer({
                      shade: [0],
                      dialog: {           
                        msg: '您还没有登录，不能发表评论！',
                        btns: 1,                
                        type: 3, 
                        btn: ['去登录'],
                        yes: function(){
                          $.layer({
                            type : 2,
                            title: '用户登陆',
                            shadeClose: false,
                            maxmin: false,
                            fix : true,
                            fadeIn: 500,
                            area: ['600px', '350px'], 
                            iframe: {
                              src : "account/logined.php"
                            }
                          });
                        }
                      }
                    });
                }else{
                    alert("评论添加失败");
                }
            },'json');
        });
});