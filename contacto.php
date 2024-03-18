<?php
include_once 'header.php';
?>
    <link rel="stylesheet" href="style.css">

   
<!-- END CONTACTO -->
<section class="container py-3">
    <div id="contact-area" style="background-image: url(contact.jpg);">
      <span class="display-4 text-primary">Nossos Contactos</span>  
      <p>Lorem ipsum dolor sit amet.</p>
      <p>Entre em contacto com o nosso time em tempo real, Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima doloremque praesentium ipsum neiendis quaerat at magni! Porro nam libero labore vitae voluptas.</p>
    </div>
    
</section>
<!-- END CONTACTO -->
   
    <section class="contacto">
          <div class="container ">
                <div class="contacto-info">
                    <div class="left-side">
                        <div>
                            <i class="fa-solid fa-map-pin"></i>
                            <p>Av. Lorem ipsum edificio nº 23</p>
                        </div>   
                        <div>
                          <i class="fa-solid fa-envelope"></i>
                            <p>contacto@portaldodador.com.ao</p>  
                        </div>
                        <div>
                            <i class="fa-solid fa-phone"></i>
                            <p>(+244)93x xxx xxx</p>
                        </div>     
                    </div>
                    <div class="right-side">
                        <form action="#">
                            <input type="text" name="Nome" placeholder="Nome" required>
                            <input type="emaiil" name="Email" placeholder="Email" required>
                            <input type="text" name="assunto" placeholder="Assunto" required>
                            <textarea placeholder="Sua mensagem"  cols="30" rows="10" required></textarea>
                            <button class="main-btn bg-danger text-light shadow rounded-2 border-0">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php
include_once 'footer.php';
?>
