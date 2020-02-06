<?php

echo '  <div class="grid row"> 
    <!--shaders-->
    <figure class="effect-bubba column shaders show"> <img src="images/honeylight-concept.jpg" alt="Honeylight"/>
      <figcaption onclick ="window.location=\'perproject/shader_nector.php\';">
        <p>Honey Shader</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column shaders show"> <img src="images/stumpywell_web.jpg" style="align-content: flex-end;" alt="Floating Shader"/>
      <figcaption onclick = "window.location=\'perproject/shader_float.php\';">
        <p>Floating Shader</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column shaders show"> <img src="images/blightblue_web.jpg" alt="Transition Shader"/>
      <figcaption onclick = "window.location=\'perproject/shader_trans.php\';">
        <p>Skin Shedding Effect Shader</p>
      </figcaption>
    </figure>
	  <!--VR and graphics 5-->
    <figure class="effect-bubba column vr show"> <img src="videos/jpodgranny.jpg" alt="JPod"/>
      <figcaption onclick ="window.location=\'perproject/vr-granny.php\';">
        <p>VR-Oculus Rift</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column vr show"> <img src="videos/whalefins-short.jpg" style="align-content: flex-end;" alt="Texture and Modeling"/>
      <figcaption onclick ="window.location=\'perproject/vr-fins.php\';">
        <p>Animation Rigging - Whale Fins</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column graphics show"> <img src="videos/mp5.jpg" alt="Vectors and Normals"/>
      <figcaption onclick ="window.location=\'perproject/graphics_mp5.php\';">
        <p>Graphics - Texture Mapping and Modeling</p>
      </figcaption>
    </figure>
      <!--graphics 321-->
	  <figure class="effect-bubba column graphics show"> <img src="videos/cominemesh.jpg" alt="CombineMesh"/>
      <figcaption onclick ="window.location=\'perproject/graphics_combine.php\';">
        <p>Graphics - Combine into ONE Mesh</p>
      </figcaption>
	  </figure>
    <figure class="effect-bubba column graphics show"> <img src="videos/mp3.jpg" alt="MP3"/>
      <figcaption onclick ="window.location=\'perproject/graphics_mp3.php\';">
        <p>Graphics - Vectors and Normals with shadow projection</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column graphics show"> <img src="videos/mp2.jpg" style="align-content: flex-end;" alt="Texture and Modeling"/>
      <figcaption onclick ="window.location=\'perproject/graphics_mp2.php\';">
        <p>Graphics - Parenting and Translation</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column graphics show"> <img src="videos/mp1.jpg" alt="Vectors and Normals"/>
      <figcaption onclick ="window.location=\'perproject/graphics_mp1.php\';">
        <p>Graphics - ShaderGraph Introduction</p>
      </figcaption>
    </figure>
	  <figure class="effect-bubba column show"> <img src="images/openscene.png" alt="Snowman\'s Nightmare"/>
      <figcaption onclick="filterSelection(\'game\');selectmenu(4); putcontent(4);">
        <p>Game: WebGL and Javascript</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column art show"> <img src="images/elephant.jpg" alt="Repose"/>
      <figcaption onclick="openModal();currentSlide(1)">
        <p>Smiling in Repose</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column art show"> <img src="images/elephantcolor.jpg" alt="in color"/>
      <figcaption onclick="openModal();currentSlide(2)">
        <p>Repose reimagined</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column art show"> <img src="images/cat.jpg" alt="Cat"/>
      <figcaption onclick="openModal();currentSlide(3)">
        <p>Fur in pencil</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column art show"> <img src="images/ganesh.jpg" alt="Ganesha"/>
      <figcaption onclick="openModal();currentSlide(4)">
        <p>To me , HE is everything!</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column art show"> <img src="images/horse.jpg" alt="Horses"/>
      <figcaption onclick="openModal();currentSlide(5)">
        <p>Knights A-Splendor</p>
      </figcaption>
    </figure>
    <figure class="effect-bubba column art show"> <img src="images/whale.jpg" alt="Whale"/>
      <figcaption onclick="openModal();currentSlide(6)">
        <p>Digital Waves</p>
      </figcaption>
    </figure>
	  		<!--lighting-->
  <figure class="effect-bubba column lighting show"> <img src="images/sudhakar_sharanya_partB.jpg" alt="lighting original"/>
    <figcaption onclick="openModal();currentSlide(7)">
      <p>Lighting with maya</p>
    </figcaption>
  </figure>
  <figure class="effect-bubba column lighting show"> <img src="images/sudhakar_sharanya_partB_joy.jpg" alt="lighting happy"/>
    <figcaption onclick="openModal();currentSlide(8)">
      <p>To portray Joy</p>
    </figcaption>
  </figure>
  <figure class="effect-bubba column lighting show"> <img src="images/sudhakar_sharanya_partB_sadness.jpg" alt="lighting happy"/>
    <figcaption onclick="openModal();currentSlide(9)">
      <p>To portray Sadness</p>
    </figcaption>
  </figure>
  <figure class="effect-bubba column lighting show"> <img src="images/sudhakar_sharanya_sad.jpg" alt="lighting happy"/>
    <figcaption onclick="openModal();currentSlide(10)">
      <p>To portray Loneliness</p>
    </figcaption>
  </figure>
    <!-- end grid--></div>
  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal"> <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
      <div class="mySlides">
        <div class="numbertext">1 / 10</div>
        <div class="caption">Smiling in Repose</div>
        <img src="images/elephant.jpg" alt="Repose"/></div>
      <div class="mySlides">
        <div class="numbertext">2 / 10</div>
        <div class="caption">Repose reimagined</div>
        <img src="images/elephantcolor.jpg" alt="in color"/> </div>
      <div class="mySlides">
        <div class="numbertext">3 / 10</div>
        <div class="caption">Fur in pencil</div>
        <img src="images/cat.jpg" alt="Cat"/> </div>
      <div class="mySlides">
        <div class="numbertext">4 / 10</div>
        <div class="caption">To me , HE is everything!</div>
        <img src="images/ganesh.jpg" alt="Ganesha"/> </div>
      <div class="mySlides">
        <div class="numbertext">5 / 10</div>
        <div class="caption">Knights A-Splendor</div>
        <img src="images/horse.jpg" alt="Horses"/> </div>
      <div class="mySlides">
        <div class="numbertext">6 / 10</div>
        <div class="caption">Digital Waves</div>
        <img src="images/whale.jpg" alt="Whale"/> </div>
		      <div class="mySlides">
        <div class="numbertext">7 / 10</div>
        <div class="caption">Lighting with Maya</div>
        <img src="images/sudhakar_sharanya_partB.jpg" alt="original lighting" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">8 / 10</div>
        <div class="caption">To Portray Joy</div>
        <img src="images/sudhakar_sharanya_partB_joy.jpg" alt="joy" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">9 / 10</div>
        <div class="caption">To Portray Sadness</div>
        <img src="images/sudhakar_sharanya_partB_sadness.jpg" alt="sadness" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">10 / 10</div>
        <div class="caption">To Portray Loneliness</div>
        <img src="images/sudhakar_sharanya_sad.jpg" alt="lonely" style="width:100%"> </div>
      <!-- Next/previous controls --> 
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> 
      <!--end model content--></div>
    <!--end modal--> </div>
  <!--end main container-->';
?>