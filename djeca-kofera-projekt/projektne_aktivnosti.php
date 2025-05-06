<?php include("header.php")?>
    <!-- HEADER -->
    <div class="header-container">
      <header>
        <div class="header-text-container">
          <h1 class="title-header">PROJEKTNE AKTIVNOSTI</h1>
          <h2 class="subtitle">DJECA KOFERA</h2>
        </div>
        <div class="header-img">
          <img src="img/vizualni_identitet.png" alt="" />
        </div>
      </header>
    </div>

    
      <!--MEDIJSKI SADRŽAJ-->
      <div class="container-medijski-sadrzaji">
        <div class="medijski-sadrzaji">
          <h2 class="subtitle">MEDIJSKI SADRŽAJI</h2>
          <div class="medijski-sadrzaj-1" >
            <h3 class="small-title">INTERVIJU S GORDANOM BULJAN FLANDER</h3>
            <p class="paragraph">
              Intervjuirali smo: prof.dr.sc. GORDANU BULJAN FLANDER – kliničku
              psihologinju, integrativnog psihoterapeuta za djecu, adolescente i
              odrasle, stalna sudska vještakinja za zlostavljanu i
              traumatiziranu djecu. Autorica knjige u suradnji s Mijom Roje Đapo
              „ Dijete u (središtu) sukoba. Razvod roditelja, visoki konflikt i
              otuđenje: Znanost teorija i klinička praksa<br>
              <a href="" target="_blank"><button>POGLEDAJ INTERVIJU</button></a>
            </p>
            <div class="med-sad-gallery-1">
              <img src="img/gordana-interviju-1.jpg" alt="" onclick="FullView(this.src)" />
              <img src="img/gordana-interviju-2.jpg" alt="" onclick="FullView(this.src)">
              <img src="img/gordana-interviju-3.jpg" alt="" onclick="FullView(this.src)">
            </div>
           

            <h3 class="small-title">INTERVIJU S MORANOM MAKOVEC</h3>
            <p class="paragraph">
              Moranu Makovec, socijalnu radnicu zaposlenu u Hrvatskom zavodu za socijalni rad i edukanticu 4. godine za dječjeg i adolescentnog integrativnog psihoterapeuta<br>
              <a href="" target="_blank"><button>POGLEDAJ INTERVIJU</button></a> 
            </p>
            <div class="med-sad-gallery-1">
              <img src="img/morana-interviju-1.jpg" alt="" onclick="FullView(this.src)">
              <img src="img/morana-interviju-2.jpg" alt=""  onclick="FullView(this.src)">
              <img src="img/morana-interviju-3.jpg" alt=""  onclick="FullView(this.src)">
            </div>

            
            <h3 class="small-title">INTERVIJU DOM ZA STARIJE</h3>
            <p class="paragraph">
             Intervjuirali smo štićenike Doma za starije i nemoćne, Peščenica i razgovarli o obitelji i domu
            </p>
            <div class="med-sad-gallery-1">
              <img src="img/dom-1.jpg" alt="" onclick="FullView(this.src)">
              <img src="img/dom-2.jpg" alt="" onclick="FullView(this.src)">
              <img src="img/dom-3.jpg" alt="" onclick="FullView(this.src)">
            </div>

            <h3 class="small-title">SNIMANJE TIK TOKA</h3>
            <p class="paragraph">
             Intervjuirali smo učenike Škole za grafiku, dizajn i medijsku produkciju

            </p>
            <div class="med-sad-gallery-1">
              <img src="img/tiktok-1.jpg" alt=""  onclick="FullView(this.src)">
              <img src="img/tiktok-2.jpg" alt=""  onclick="FullView(this.src)">
              <img src="img/tiktok-3.jpg" alt=""  onclick="FullView(this.src)">
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div id="FullImageView">
      <img id="FullImage">
      <span id="CloseButton" onclick="CloseFullView()">X</span>
    </div>
    <!--PREZENTIRANJE VJEĆA-->

    <div class="prezentiranje-predsjednik-wrapper">
      <div class="prezentiranje-predsjednik">
          <h2 class="subtitle">
            PREDSTAVLJANJE PROJEKTA <br>
            U UREDU PREDSJEDNIKA
          </h2>
          <p class="paragraph">Povod odlasku bio je predstavljanje školskog projekta Djeca kofera, ali smo u razgovoru prvenstveno predstavili svoju školu, povijest, postignuća i potencijal. Projekt su, uz mentorstvo naše socijalne pedagoginje Nives Butorajac Radiček, osmislile učenice 2. B razreda. Projekt se bavi pitanjima definiranja i funkcije obitelji te odnosa unutar nje.</p>
        <a href="https://skola-gdmp.hr/2025/03/25/predstavljanje-skolskog-projekta-u-uredu-predsjednika-republike-hrvatske/" target="_blank"><button>PROČITAJ VIŠE</button></a>
          <div class="prezentiranje-predsjednik-slike">
          <img src="img/sastanak-1.jpg" alt=""  onclick="FullView(this.src)">
          <img src="img/sastanak-2.jpg" alt=""    onclick="FullView(this.src)">
        </div>
      </div>
    </div>

<div class="prezentiranje-vjece-wrapper">
    <div class="prezentiranje-vjece">
        <h2 class="subtitle">
          SLIKE S VJEĆA UČENIKA
        </h2>
      <div class="prezentiranje-vjece-slike">
        <img src="img/vjece-1.jpg" alt="" onclick="FullView(this.src)">
        <img src="img/vjece-2.jpg" alt=""   onclick="FullView(this.src)">
      </div>
    </div>
  </div>

  <div class="prezentiranje-web-wrapper">
    <div class="prezentiranje-web">
        <h2 class="subtitle">
          PREZENTIRANJE
          WEB DIZAJNERIMA
        </h2>
      <div class="prezentiranje-web-slike">
        <img src="img/web-1.jpg" alt=""  onclick="FullView(this.src)">
        <img src="img/web-2.jpg" alt=""   onclick="FullView(this.src)">
      </div>
    </div>
  </div>

  <div class="prezentiranje-gud-wrapper">
    <div class="prezentiranje-gud">
        <h2 class="subtitle">
          PREZENTIRANJE<br>
          GRAFIČKIM UREDNICIMA-DIZAJNERIMA
        </h2>
      <div class="prezentiranje-gud-slike">
        <img src="img/gud-1.jpg" alt=""     onclick="FullView(this.src)">
        <img src="img/gud-2.jpg" alt=""   onclick="FullView(this.src)">
      </div>
    </div>
  </div>


  <?php include("footer.php")?>
