<!doctype html>
<title>PoPView</title>
<style>
body { 
  display: grid;
  grid-template-areas: 
    "header header header"
    "nav article ads"
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
  grid-template-columns: repeat(9, 1fr);
  grid-gap: 1px;
  }
#portadas{
  display: grid;
  text-align: center;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1px;
}
#portadas article {
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-gap: 1px;
}
#content section{
  background: salmon;
  }
  #content article{
    background: salmon;
  }
@media all and (max-width: 575px) {
  body { 
    grid-template-areas: 
      "header"
      "article"
      "ads"
      "nav"
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
    <nav id="mainNav">
        @yield("nav")
    </nav>
    <div id="siteAds">
        @yield("sites")
    </div>
    <footer id="pageFooter">
        @yield("pie")
    </footer>
</body>