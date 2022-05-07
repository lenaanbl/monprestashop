



    <title> Contact Us </title>
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css" media="all"/>
    <script src="https://kit.fontawesome.com/9f7a72c9b6.js" crossorigin="anonymous"></script>

    <section>
        <div class="container">
          
            <form action="" method="post">
                <div class="contactForm">
                    <h2>Envoyez nous un message :</h2>
                    <div class="formBox">
                        
                        <div class="inputBox w50">
                            <input type="text" name="sujet" required>
                            <span>Sujet:</span>      
                        </div>    
                        <div class="inputBox w100">
                            <textarea name="message" required></textarea>
                            <span>Votre message :</span>      
                        </div>
                        
                        <div class="inputBox w100">
                            <input type="submit" value="send">    
                        </div>                           
                    </div>
                </div>
            </form>
        </div>

    </section>

    <?php
        require('tools/footer.html');
    ?>

</body>
</html>