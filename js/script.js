$(document).ready(function(){
    $("div#content").ready(function(){
        $.post("php_application/search.php",null, function(data){
            $("div#content").empty()
            $.each(data.menu, function(){
                $("div#content").append("<div class='row divider'><div class='span3 thumbnail '><img class='food_image ' src='"+ this.image + "'></div><div class='span8'><h3><a href='#?id=" + this.id + "'>" + this.name +"</a> &nbsp&nbsp&nbsp&nbsp  Price "+ this.price +" ksh</h3><p>" + this.content +"</p></div></div></div>");
            });
            $("li#count").empty()
            $("li#count").append("<a href='#'><span class='add-on'><i class='icon-wrench'></i></span> Available <span class='badge'>"+data.count+"</span></a>");

        },"json");  
    });
    $(".search").keyup(function(){
        $.post("php_application/search.php",{ q: $(".search").val() }, function(data){
            $("div#content").empty()
            $.each(data.menu, function(){
                $("div#content").append("<div class='row divider'><div class='span3 thumbnail '><img class='food_image ' src='"+ this.image + "'></div><div class='span8'><h3><a href='#?id=" + this.id + "'>" + this.name +"</a> &nbsp&nbsp&nbsp&nbsp  Price "+ this.price +" ksh</h3><p>" + this.content +"</p></div></div></div>");
            });
            $("li#count").empty()
            $("li#count").append("<a href='#'><span class='add-on'><i class='icon-wrench'></i></span> Available <span class='badge'>"+data.count+"</span></a>");

        },"json"); 
    });
}); 