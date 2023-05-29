<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content= "Website (HTML,CSS,JS,JQUERY)- Portfolio ">
    <meta name="description" content= "Aqui é um website produzido por mim Kauan Nery para mostrar alguma das minhas habilidade">
    <title>Website Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Portfolio</div>
        <nav class="desktop"></nav>
            <ul>
                <li><a href= ""> Home</a></li>
                <li><a href= ""> Sobre</a></li>
                <li><a href= ""> Serviços </a></li>
                <li><a href= ""> Contato</a></li>
            </ul>
    </nav>
    <nav class="mobile">
            <ul>
                 <li><a href= ""> Home</a></li>
                <li><a href= ""> Sobre</a></li>
                <li><a href= ""> Serviços </a></li>
                <li><a href= ""> Contato</a></li>
            </ul>
    </nav>  
    </header>
        <section class="banner-principal"></section>
        <div class="overlay"></div>
        <form>
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" required />
            <input type="submit" name="acao" value="cadastrar!">  
         </form>

         <section class="descricao-autor"></section>
         <div class="w50">
            <h2>Kauan Nery </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae enim voluptas architecto? Reiciendis labore numquam, magnam deleniti quis nam doloremque vero. Officia similique distinctio aliquam sequi quos mollitia vitae nihil! </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dolorum architecto odio id fugit fugiat, voluptatum repudiandae vitae quam suscipit rerum debitis aperiam accusantium cupiditate iste omnis reiciendis, repellat ipsum?</p>
        </div><!--w50-->
        <div class="w50">
        </div><!--w50-->
        </section>


        <section class="especialidades">
            <h2 class="title">Especialidades </h2>    
            <div class="center"> 
                <div class="box-especialidade"> 
                    <h3>icone</h3>   
                    <h3>CSS3</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ipsam aperiam cupiditate vero libero corporis repellat eligendi nobis molestiae provident culpa, accusantium, illo mollitia molestias sint rerum explicabo non nemo.</p>
                <div class="box-especialidade"> 
                    <h3>icone</h3>   
                    <h3>HTML5</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ipsam aperiam cupiditate vero libero corporis repellat eligendi nobis molestiae provident culpa, accusantium, illo mollitia molestias sint rerum explicabo non nemo.</p>
                <div class="box-especialidade"> 
                    <h3>icone</h3>   
                    <h3>JavaScript</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ipsam aperiam cupiditate vero libero corporis repellat eligendi nobis molestiae provident culpa, accusantium, illo mollitia molestias sint rerum explicabo non nemo.</p>
                   
            </div><!--center-->
         </section><!--especialidades-->

         <section class="extras">
            <div class="center">
               <div class="w50">
                    <h2 class="title"> Depoimentos </h2>

                    <div class=depoimento-single></div><!--depoimento-single-->              
                        <p class="depoimento-descricao"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quaerat temporibus sequi dicta incidunt? Similique facilis quibusdam sequi veniam itaque. Impedit possimus aspernatur laborum omnis ex? Labore expedita tempora autem.</p>
                        <p class="nome-autor"> Nome do autor </p>
                        </div><!--deppimento-single-->

                        <div class=depoimento-single></div><!--depoimento-single-->              
                        <p class="depoimento-descricao"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quaerat temporibus sequi dicta incidunt? Similique facilis quibusdam sequi veniam itaque. Impedit possimus aspernatur laborum omnis ex? Labore expedita tempora autem.</p>
                        <p class="nome-autor"> Nome do autor </p>
                        </div><!--deppimento-single-->

                        <div class=depoimento-single></div><!--depoimento-single-->              
                        <p class="depoimento-descricao"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quaerat temporibus sequi dicta incidunt? Similique facilis quibusdam sequi veniam itaque. Impedit possimus aspernatur laborum omnis ex? Labore expedita tempora autem.</p>
                        <p class="nome-autor"> Nome do autor </p>
                        </div><!--deppimento-single-->
                </div>
            </div>
         </section><!--extras-->

         <footer>
        <div class="center"></div>
        <p>Todos os direitos reservados</p>
         </footer>
    
</body>
</html>
