<php?php 
    //Template Name: Contato
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Pilates e Perda de Peso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
        }
        header img {
            max-height: 50px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .hero {
            text-align: center;
            padding: 50px 20px;
            background-color: #fff;
        }
        .hero h1 {
            font-size: 48px;
            color: #d35400;
        }
        .hero p {
            font-size: 20px;
            color: #555;
        }
        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            font-size: 36px;
            color: #d35400;
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-form label {
            font-size: 18px;
            color: #555;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-form button {
            width: 100%;
            padding: 15px;
            background-color: #d35400;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #e67e22;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php get_header();?>
    <div class="container">
        <section class="hero">
            <h1>Contato</h1>
            <p>Entre em contato conosco. Estamos aqui para ajudar você a alcançar seus objetivos de saúde e bem-estar.</p>
        </section>
        <section class="contact-form">
            <h2>Fale Conosco</h2>
            <form action="submit_form.php" method="POST">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Mensagem</label>
                <textarea id="message" name="message" rows="6" required></textarea>
                
                <button type="submit">Enviar Mensagem</button>
            </form>
        </section>
    </div>
    <?php get_footer();?>
</body>
</html>
