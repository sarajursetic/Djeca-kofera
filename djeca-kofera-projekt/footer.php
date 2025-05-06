 <!-- FOOTER-->
 <div class="footer-container">
      <footer>
         <div class="footer-logo"><img src="img/logo_footer.png" alt="LogoFooter"></div>
         <div class="adresa-footer">
             <h3 class="small-title">ADRESA</h3>
             <p>Škola za grafiku, dizajn i medijsku produkciju</p>
             <p>Getaldićeva 2, Zagreb</p>
         </div>
         <div class="kontakt-footer">
             <h3 class="small-title">KONTAKT</h3>
             <p><a href="mailto:djecakofera@gmail.com">djecakofera@gmail.com</a></p>
             <p><a href="tel:+0915607896"></a>0915607896</p><br>
         </div>
         <div class="footer-people">
             <p>Projekt izradili učenici 2.b, 3.b, 3.d i  Nives Butorajac Radiček, socijalna pedagoginja.</p><br>
         </div>
         <div class="footer-logo-skole"><img src="img/logo_skole.svg" alt="logoSkole"></div>
      </footer></div>
      <script>
        let scrollContainer = document.querySelector(".gallery");
        let backBtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");
  
        scrollContainer.addEventListener("wheel", (evt) => {
          evt.preventDefault();
          scrollContainer.scrollBy({
            top: evt.deltaY * 5,
            behavior: "smooth",
          });
        });
  
        nextBtn.addEventListener("click", () => {
          scrollContainer.scrollBy({
            top: 140, // Pomakni se za visinu jednog slajda
            behavior: "smooth",
          });
        });
  
        backBtn.addEventListener("click", () => {
          scrollContainer.scrollBy({
            top: -140,
            behavior: "smooth",
          });
        });
      </script>
      
  </body>
</html>
