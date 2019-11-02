<!Doctype html>
<title>Pop</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
article{
  padding: 1em;
  }
#pageHeader {
  background: url('https://pngimage.net/wp-content/uploads/2018/05/cinta-pelicula-png-6.png');
  background-repeat: repeat, no-repeat;
  background-size: 280px ;
  grid-area: header;
  color: salmon;
  font-size: 3em !important;
  text-align: center;
}
#pageHeader img{
      float: right;
      padding-right: 50px;
      margin-top: 5px;
      width: 150px;
} 
#pageHeader h1{
  background: rgba(0, 0, 0, 0.5);
      margin-top: 20px;
} 
#pageFooter {
  grid-area: footer;
  }
#mainArticle { 
  grid-area: article;
  text-align: center;
  }
#mainArticle h1 { 
  font-size: 2em;
  color: #000;
  }
  #mainArticle form{
  margin: 0 auto;
  }
#mainNav { 
  grid-area: nav; 
  }
#siteAds { 
  grid-area: ads; 
  } 
  .myForm > * {
   font: 1.4em 'Unkempt', sans-serif; 
  }
  .myForm {
    display: grid;
    grid-template-columns: [labels] auto [controls] 1fr;
    grid-auto-flow: row;
    grid-gap: .8em .5em;
    background: transparent;
    border: 1px solid salmon;
    border-radius: 5px;
    padding: 1.2em;
    width: 70%;
  }
  .myForm > label {
    grid-column: labels;
    grid-row: auto;
  }
  .myForm > input,
  .myForm > textarea {
    grid-column: controls;
    background: transparent;
    grid-row: auto;
    padding: .4em;
    border: 0;
    border-bottom: 1px solid salmon;
  }
  input[type=text]:focus {
  background-color: salmon;
}
  textarea:focus{
  background-color: salmon;
  }
  .myForm > .btn_enviar {
    grid-column: span 2;
  }  
  .myForm > .btn_enviar {
    padding: 1em;
    background: salmon;
    border: 0;
    color: white;
    border-radius: 20px;
    }
    .myForm > .btn_enviar:hover {
    padding: 1em;
    background: transparent;
    border: 0;
    color: salmon;
    transition: .5s;
    border-radius: 0px;
    border: 1px solid salmon;
    }
  .myForm > textarea {
    min-height: 3em;
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
        @yield("content")
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