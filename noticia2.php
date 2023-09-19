<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/lg/logi.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style_noticia2.css">
    <link href="css/style_botao.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Cyber Information</title>
</head>
<body>
    <nav>
        <!--logo tipo-->
            <img class="logo" src="img/lg/logi.png">
                <div class="cb">Cyber Information</div>
        <!--fechamento de logo-->
            <!-- liks de menu-->
                <ul class="menu">
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="cadastro.html">Notificação</a>
                    </li>
                    <li>
                         <a href="fale_conosco.html">Dúvidas</a>
                    </li>
                    <li>
                        <a href="sobre_nos.html">Sobre nós</a>
                    </li>    
                    <li>
                        <a href="noticia.html">Notícia </a> 
                    </li>
                    <li>
                        <a href="jogo.html">Jogo </a> 
                    </li>
                
                <!--imagens das redes sociais -->    
                    <a href="#"><img class="redes" src="img/redes_sociais/face.png"></a>
                    <a href="#"><img class="redes" src="img/redes_sociais/insta.png"></a>
                    <a href="#"><img class="redes" src="img/redes_sociais/linke.png"></a>
                    <a href="#"><img class="redes" src="img/redes_sociais/tw.png"></a>
                
                <!--fechamento das redes sociais-->    
                    <!--botão noturno-->
                    <p><div>
                        <input type="checkbox" class="checkbox" id="chk" />
                        <label class="label" for="chk">
                          <div class="ball"></div>
                        </label>
                    </div>
                    </p>
                      <script src="js/script_botao.js"></script>
                      
    
                    <!--fechamento do botao noturno-->
                    <div class="search-box">
                      <input class="search-txt"  name="" placeholder="Pesquise ">
                      <a class="search-btn" href="#">
                          <i class="fas fa-search"></i>
                      </a>
                  </div>
        </nav>
<center>
<div class="topo">
<p><img id="circulo" src="img/lucas.jpeg"></p>
<p>Lucas Daniel</p>
<p>Junho,20,2022</p>
</div>
<h1>LGPD e a segurança da informação </h1>
<img class="img" src="img/lgpd.jpg"></center>
<main>
<article>
<p>A LGPD ou Lei Geral de Proteção de Dados (Lei n°13709), tem como principal objetivo garantir a privacidade e a proteção dos dados dos brasileiros. Essa lei foi criada no fim de 2018 e entrou em vigor no ano de 2020, em setembro. Com o intuito de não haver confusão, essa lei define o que são dados pessoais (são dados que identificam uma pessoa), e explica também que para alguns dados são necessários maiores cuidados, como por exemplo os dados pessoais de crianças e adolescentes. Também esclarece que todos os dados tratados tanto no ambiente físico como no digital podem mudar. </p>

<p>Além disso, a lei diz que não importa a localização da organização ou do centro de dados se estão no exterior ou no Brasil, existindo o processamento de dados pessoais que estão no território nacional, a LGPD deve ser aplicada. Ela autoriza o compartilhamento de dados pessoais para outros países, desde que sejam observados os requisitos estabelecidos.  </p>
<p>A LGPD traz várias garantias para o cidadão, como por exemplo: transferir seus dados para outros fornecedores de serviços, a possibilidade do cidadão poder pedir para que seus dados pessoais sejam excluídos, e etc.  
O órgão do governo que fiscaliza e penaliza pelos descumprimentos da Lei Geral de Proteção de Dados é a Autoridade Nacional de Proteção de Dados (ANPD). A lei prevê a existência dos agentes de tratamento de dados e estipula suas funções, sendo essas funções: o controlador, que é quem toma as decisões do tratamento de dados, o operador, é a pessoa que realiza o tratamento de dados em nome do controlador, e o encarregado é a pessoa que interage com a autoridade nacional e os titulares dos dados pessoais.
</p>
</article>

<div class="anuncio">
<img src="img/propa.png" width="310px" height="220px">
</div>
</main>
<hr></hr>
<center>
<h3>Deixe seu comentário</h3>
<form method="post" action="registro.php" name="formulario">
<input type="text" name="produto" id="produto" placeholder="Nome*">
<br><br>
<input type="email" name="quantidade" id="quantidade" placeholder="E-mail*">
<br><br>
<textarea name="preco" id="preco" placeholder="Deixe seu comentário*"></textarea>
<br><br>
<input type="submit" name="enviar" value="Enviar">
<input type="reset" name="limpar" value="Limpar">


</form>

<article>
<table>


<?php
$conexao = @mysqli_connect('localhost','root','usbw','lista')
or die ("Problemas com a conexão do Banco de Dados");
$query = mysqli_query($conexao,"SELECT * FROM `produtos` order by Codigo") or die ("erro de Instrução");

while($dados=mysqli_fetch_array($query))
{
echo "<tr> <td class='tr'>".$dados['Produto']."</td></tr>
<tr><td class='tr'>".$dados['Quantidade']."</td></tr>
<tr><td class='tr'>".$dados['Preco']."</td>";}
?>
</table>
</article>
<hr></hr>
</center>
<br><br>
<main class="conteudo">
<section class="conteudo__cartao">
<img src="img/noticias/23.jpeg">
<p class="text"> Ataques por phishing crescem no Brasil 41% em 2021</p>
</section>

<section class="conteudo__cartao">
<img src="img/noticias/17.jpeg">
<p>Você deve aceitar o uso de cookies na internet?</p>
</section>

<section class="conteudo__cartao">
<img src="img/noticias/25.jpg">
<p>Cloudflare registra novo recorde para ataque DDoS, e Brasil é uma das origens</p>
</section>

<section class="conteudo__cartao">
<img src="img/noticias/8.jpeg">
<p>Perfis falsos prometem Netflix grátis para roubar dados</p>
</section>

<section class="conteudo__cartao">
<img src="img/noticias/15.jpeg">
<p>Brasil é um dos países com mais fraudes por ataques virtuais no mundo</p>
</section class="conteudo__cartao">

<section class="conteudo__cartao">
<img src="img/noticias/24.jpeg">
<p>Nova falha no Microsoft Office facilita a invasão do Windows</p>
</section>
</main>
  <!--footer-->
  <footer>
    <div class="footer">  
        <h1 class="foo" >CyberInformation.com</h1>
        
            <a class="menu_footer" href="#">Home</a>
            <a class="menu_footer" href="#about">Notificação</a>    
            <a class="menu_footer" href="fale_conosco.html">Dúvidas</a>
            <a class="menu_footer" class="menu" href="#contact">Sobre nós</a>
            <a class="menu_footer" href="#">Notícia </a>  
            <a class="menu_footer" href="#">Jogo </a>
             <p></p>
             <a href="#"><img class="redes1" src="img/redes_sociais/face.png"></a>
             <a href="#"><img class="redes1" src="img/redes_sociais/insta.png"></a>
             <a href="#"><img class="redes1" src="img/redes_sociais/linke.png"></a>
             <a href="#"><img class="redes1" src="img/redes_sociais/tw.png"></a>
</div>
</footer>
   <!--fechamento de footer-->
</body>
</html>