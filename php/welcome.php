<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Twister - Serviços</title>
    
    <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0; /* Remover margens padrão do corpo */
        font-family: 'Arial', sans-serif; /* Escolha uma fonte apropriada */
        background-color: #232224; /* Cor de fundo do corpo */
    }

    .services,
    .haircuts {
        flex: 1;
        background-color: #232224; /* Cor de fundo das seções de serviços e cortes */
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        margin: 20px; /* Espaçamento externo para separar as seções */
        border-radius: 10px; /* Bordas arredondadas */
    }

    h2 {
        color: #fff; /* Cor do cabeçalho */
    }

    p {
        color: #fff; /* Cor do texto principal */
    }

    .footer {
        text-align: center;
        padding: 20px;
        background-color: #333; /* Cor de fundo do rodapé */
        color: #fff; /* Cor do texto do rodapé */
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px; /* Espaçamento superior para separar as informações de contato */
    }

    .service-columns {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .service-column {
        flex: 0 0 30%;
        margin-bottom: 20px;
        padding: 15px;
        background-color: #666;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s ease; /* Adiciona uma transição suave no hover */
    }

    .service-column:hover {
        transform: scale(1.05); /* Efeito de escala no hover */
    }

    h3 {
        color: #fff;
    }

    button {
        background-color: #4caf50; /* Cor de fundo do botão */
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease; /* Adiciona uma transição suave no hover do botão */
    }

    button:hover {
        background-color: #45a049; /* Cor de fundo do botão no hover */
    }
</style>
</head>
<body>

    <section class="services">
        <div class="services-content container">
            <h2>Nossos Serviços</h2>
            <p>Na Barbearia Twister, oferecemos uma variedade de serviços para atender às suas necessidades de cuidados masculinos. Nossos experientes barbeiros proporcionam uma experiência única, combinando cortes de cabelo modernos e clássicos.</p>
        </div>
    </section>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Twister - Serviços</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<section class="haircuts">
    <div class="service-columns">
        <?php
        // tudo organizado 21:11 30/11/23
        $servicos = array(
            "Corte Normal" => array(
                "preco" => "R$25,00",
                "descricao" => "Transforme seu visual com um corte moderno e estiloso. Destaque-se na multidão com a elegância do corte normal."),

            "Barba Completa" => array(
                "preco" => "R$20,00",
                "descricao" => "Mantenha a barba impecável com nosso serviço completo. Estilo e cuidado para uma aparência sofisticada."),
                
            "Corte e Barba" => array(
                "preco" => "R$35,00",
                "descricao" => "Combine o melhor dos dois mundos: corte de cabelo e barba afiada. Atualize seu visual com este pacote completo."),

             "Tratamento Facial" => array(
                "preco" => "R$50,00",
                "descricao" => "Revitalize sua pele com nosso tratamento facial especializado. Deixe seu rosto radiante e rejuvenescido."),
            
            "Corte Infantil" => array(
                "preco" => "R$35,00",
                "descricao" => "Atenção especial aos pequenos! Oferecemos cortes infantis com carinho e profissionalismo. Crianças na moda!"),

            "Coloracao" => array(
                "preco" => "R$70,00",
                "descricao" => "Adicione um toque de cor à sua vida com nosso serviço de coloração. Personalize seu estilo com tons vibrantes e modernos."), 
            
            "Massagem Capilar" => array(
                "preco" => "R$30,00",
                "descricao" => "Relaxe e renove com nossa massagem capilar. Desfrute de momentos de tranquilidade enquanto cuidamos do seu couro cabeludo."),

            "Design de Sombrancelha" => array(
                "preco" => "R$15,00",
                "descricao" => "Realce sua expressão com um design de sobrancelha impecável. Moldes que complementam perfeitamente seu rosto."),

            "Depilacao" => array(
                "preco" => "R$40,00",
                "descricao" => "Experimente a suavidade da pele com nosso serviço de depilação. Resultados duradouros para uma sensação refrescante."),
        );

        foreach ($servicos as $servico => $detalhes) {
            echo '<div class="service-column" data-aos="fade-up" data-aos-delay="150">';
            echo '<h3>' . $servico . '</h3>';
            echo '<p>' . $detalhes["descricao"] . '</p>';
            echo '<button>' . $detalhes["preco"] . '</button>';
            echo '</div>';
        }
        ?>
    </div>
</section>

    <footer class="footer">
        <p>Entre em contato conosco:</p>
        <div class="contact-info">
            <p>(21) 1234-5678</p>
            <p>(21) 2345-6789</p>
        </div>
        <p>&copy; 2023 Barbearia Twister. Todos os direitos reservados.</p>
    </footer>

  
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>