<?php
// No direct access
defined('_JEXEC') or die; 
$rengasteksti = "Pienkoneet, ajoleikkurit, kuljetuskärryt, maatalouskoneet, mönkijät, ympäristökoneet... Yli 500 rengasmallia ja satoja sisärengaskokoja luotettavilta brändeiltä!"
?>
<script>
    let rengasteksti = "<?php echo $rengasteksti ?>"
</script>
<div class=tradotim-services-wrapper>
            <div class="tradotim-servises-promotion-text">
                <span  class="tradotim-servises-text-top">Tradotim Oy on pienkonerenkaiden, apuvälineiden ja niiden varaosien palveleva maahantuoja ja myyjä sekä puhkeamattomien Flexel -umpikumirenkaiden valmistaja.</span><span  class="tradotim-servises-text-bottom">Maahantuontia 30 v. kokemuksella.</span>
            <span  class="tradotim-servises-text-bottom-bottom">Luotettavat brändit, laaja valikoima erinomainen toimitusvarmuus, nopeat toimitukset.</span>
            </div>
            <div class="tradotim-servises-picture-frame">
               <div id="rengaskuva" class="rengaskuva">
               
                   <div class="rengasoverlay" id="rengasoverlay">
                       <span><?php echo $rengasteksti ?></span>
                   </div>
                   <img src="<?php echo Juri::base() . 'images/palvelut/renkaat_web_1.png'?>" alt="pienkonerenkaat">
                   <a href="<?php echo Juri::base() . 'renkaat'?>" class="renkaat-linkki"></a>
                </div>
               <div class="apuvalinekuva" id="apuvalinekuva">
                   
                        <img src="<?php echo Juri::base() . 'images/palvelut/apuvalineet_web_1.png'?>" alt="apuvalineet">
                        <a href="<?php echo Juri::base() . 'apuvalineet'?>" class="renkaat-linkki"></a>
                </div>    
               <div class="flexelkuva" id="flexelkuva">
                    
                        <img src="<?php echo Juri::base() . 'images/palvelut/flexel_web_1.png'?>" alt="puhkeamattomat flexel renkaat">
                        <a href="<?php echo Juri::base() . 'rengastietoa/19-puhkeamattomat-renkaat'?>" class="renkaat-linkki"> </a>
                </div>
            </div>
            </div>
