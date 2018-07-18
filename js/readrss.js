   $(function() {
      //el archivo XML a procesar
      $.get("http://www.elfinanciero.com.mx/rss/", function(m) {
         xml = $(m);
         var botija = 'Noticias <hr> '; //variable contenedor
         xml.find("item").each(function(i) {
            var $this = $(this);
               item = {
               title: $this.find("title").text(),
               url: $this.find("link").text(),
               image: $this.find("enclosure").attr('url'),
               };
            if((item.title.search("corrup") > -1) || (item.title.search("Corrup") > -1)  )
            {
               botija += '<div><a href="'+item.url+'">'+(item.image?'<img src="'+item.image+'" alt="imagen" /><br />':'')+item.title+'</a></div>';
            }
            
            
            //limpiar 
               
            
      });
         
      //establecemos el contenido de $botija al nodo  #noticias
      setTimeout(function() {
         $("#noticias").html(botija);
      },1000);
   },'xml');
});