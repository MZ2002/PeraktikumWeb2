<?php require_once "atas.php" ?>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Kontak Kami</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="kontak.php">
                        <fieldset>
                           <input type="text" placeholder="Masukkan Nama Lengkap" name="name" required />
                           <input type="email" placeholder="Masukkan Email" name="email" required />
                           <input type="text" placeholder="Masukkan Subjek" name="subject" required />
                           <textarea placeholder="Masukkan Pesan Anda" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      
      <!-- footer section -->
<?php require_once "bawah.php" ?>