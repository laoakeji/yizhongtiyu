/**
 * Created by Administrator on 2016/5/23.
 */

$(function(){
    //alert("运行正常")
    var banner=$(".banner_out");
    var view=banner.find(".banner_view");
    var list_out=banner.find(".banner_list");
    var list=banner.find(".b_images");
    var li=list.find("li");
    var prev=banner.find(".prev");
    var next=banner.find(".next");
    var x2=2000; //每次运行间隔的时间；
    var c=0;
    var v=li.length;
    li.eq(0).children(".images1").children("div").css("background-image","none");
    var t=setInterval(lb,x2);
    function lb(){
       // alert("ddd")
            gg();
            c++;
            if(c==v){           //到头重置；
                c=0;
            }
    }
    list_out.mouseenter(function(){
        clearInterval(t);
        setTimeout(function(){
            if(c>0&&c<6) {
                c--;
            }else{
                return;
            }
        },1)
    }).mouseleave(function(){
        t=setInterval(lb,x2);
        setTimeout(function(){
            if(c>0&&c<6) {
                c++;
            }else{
                return;
            }
        },1)
    })

    prev.click(function(){
        if(c==0){
            c=v-1;
        }else{
            c--;
        }
        gg()
    })
    next.click(function(){
        if(c==v-1){
            c=0
        }else{
            c++;
        }
        gg();
    })
    function gg(){
        li.children(".images1").children("div").css("background-image","url('images/banner_bj.png')");
        li.eq(c).children(".images1").children("div").css("background-image","none");
        view.hide();
        var src=li.eq(c).children(".images1").children("img").attr("src");
        view.find("img").attr("src",src);
        view.fadeIn(500);
    }
    li.children(".images1").click(function(){
        var n=$(this).parent().index();
        c=n;
        gg();
    })


})