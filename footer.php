<div class="content2">
  <div class="footer">
    <div class="footer-one">
      <img class="dani-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/icons//logos/Daniel-Dogs-Simples-Light.png" alt="Hotel Para Cachorros">
      <img class="dani-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logos/Daniel-Dogs-Light.png" alt="Hotel Para Cachorros">
      <div class="social-icons">
        <a href="https://api.whatsapp.com/send?phone=5551991572604">
          <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/phone-white.png" alt="Telefone">
        </a>
        <a href="https://api.whatsapp.com/send?phone=5551991572604">
          <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/wpp.png" alt="WhatsApp">
        </a>
        <a href="https://www.instagram.com/daniel.dogs_/">
          <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/insta.png" alt="Instagram">
        </a>
      </div>
    </div>
    <div class="footer-two">
      <p class="subtitle">Funcionamento:</p>
      <div class="functioning">
        <p>Segunda a domingo: 9h - 21h</p>
        <p>Abertos nos feriados</p>
      </div>
      <p class="subtitle2">Peça um orçamento!</p>
    </div>
    <div class="footer-three">
      <p class="subtitle">Faça uma visita!</p>
      <div class="functioning">
        <p>Rua Luiz Afonso</p>
        <p>348, Cidade Baixa</p>
        <p>Porto Alegre, RS</p>
      </div>


    </div>
    <div class="footer-four">
      <p class="subtitle">Entre em contato!</p>
      <div class="functioning">
        <p>(51) 99157 2604</p>
        <p>
      </div>

    </div>
  </div> <!-- Fim do Footer -->
</div>


<div class="author">
  <div class="content3">
    <p>© 2023 Daniel Dogs Hotel para Cachorros</p>
  </div>
</div> <!-- Fim do Crédito -->

<?php if (!isset($_COOKIE['aceito_cookies'])) { ?>
  <div id="barra_cookies" style="position: fixed; bottom: 0; width: 100%; background-color: #fe7f4c; color: #f7ecdf; padding: 20px; text-align: center; z-index: 100;">
    Este site usa cookies para melhorar a sua experiência. Ao continuar a navegação, você concorda com a nossa
    <a href="https://www.lgpdbrasil.com.br/" style="color: #f7ecdf; text-decoration: underline;">Política de Privacidade</a>.
    <button id="aceitar_cookies" style="margin-left: 15px; padding: 10px; background-color: #f7ecdf; color: #353535; border: none; cursor: pointer;">Aceitar</button>
  </div>

  <script>
    document.getElementById('aceitar_cookies').onclick = function() {
      document.getElementById('barra_cookies').style.display = 'none';

      var date = new Date();
      date.setFullYear(date.getFullYear() + 1); // Validade de 1 ano para o cookie

      document.cookie = "aceito_cookies=true; expires=" + date.toUTCString() + "; path=/";
    };
  </script>
<?php } ?> <!-- Fim do Cookies -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault(); // Impede a mudança de URL
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800);
      }
    });
  });
</script>

<?php wp_footer(); ?>
</body>


</html>