<!doctype html>
<title>Pop</title>
<style>
body { 
  display: grid;
  grid-template-areas: 
    "header header header"
    "article article article"
    "footer footer footer";
  grid-template-rows: 80px 1fr 70px;  
  grid-template-columns: 20% 1fr 15%;
  grid-row-gap: 10px;
  grid-column-gap: 10px;
  height: 100vh;
  margin: 0;
  }  
footer, article, nav, div { 
  background: gold;
  }
article{
  padding: 1em;
  }
#pageHeader {
  background: url('https://pngimage.net/wp-content/uploads/2018/05/cinta-pelicula-png-6.png');
  background-repeat: repeat, no-repeat;
  background-size: 280px ;
  grid-area: header;
  color: salmon;
  font-size: 1.5em;
  text-align: center;
}
#pageHeader img{
      float: right;
      padding-right: 50px;
      margin-top: 5px;
      width: 100px;
} 
#pageHeader h1{
  background: rgba(0, 0, 0, 0.5);
      margin-top: 13px;
} 
#pageFooter {
  grid-area: footer;
  }
#mainArticle { 
  grid-area: article;
  display: grid;
  grid-template-columns: 1fr;
  grid-gap: 5px;
  }
#mainNav { 
  grid-area: nav; 
  }
#siteAds { 
  grid-area: ads; 
  }
#barra {
  display: grid;
  text-align: center;
  grid-template-columns: repeat(9, 1fr);
  grid-gap: 1px;
}
#barra article{
  background: salmon;
}
#content{
  display: grid;
  text-align: center;
  grid-template-columns: 1fr;
  grid-gap: 1px;
  }
#content img{
  width: 500px;
}
#desc li{
  list-style:none;
  text-align: justify;
  margin: 10px;
}
#desc {
  margin: 0 auto;
}
#desc ul{
  width: 500px;
}
#title{
  text-align: center;
}
#title h1{
  font-size: 3em;
}
#video iframe{
  width: 500px;
}
@media all and (max-width: 575px) {
  body { 
    grid-template-areas: 
      "header"
      "article"
      "footer";
    grid-template-rows: 80px 1fr 70px 1fr 70px;  
    grid-template-columns: 1fr;
 }
}
</style>
<body>
    <header id="pageHeader">
        @yield("cabecera")
    </header>
    <article id="mainArticle">
        @yield("contenido")
    </article>
    <footer id="pageFooter">
        @yield("pie")
    </footer>
</body>