<?php include 'header.php';

?>

    <div class="videocover">
        <video autoplay muted loop id="myVideo">
            <source src="img/video.mp4" type="video/mp4">
          </video>
    </div>
        

    <main>
        <article class="about" id="about">
            <img src="img/Logo-09.png" alt="">
            <div class="abouttext">
                <h1>Haqqımızda</h1> <br>
                <p>Müasir dövrdə təkmil texnologiyalar kimi ağıllı suvarma üsullarının tətbiqi təbii resursların istifadəsi ilə genişləndirilir. Bu metodlar istehsalda səmərəliliyi yüksəltməklə yanaşı, həm də kənd təsərrüfatının avtomatlaşdırılması sayəsində az işçi qüvvəsi ilə məhsuldarlığı artırıb əlverişli hala gətirir.</p>
            </div>
        </article>
        <div class="parallax second">

        </div>
        <article class="service" id="service">
            <h1>Sistem aşağıdakı xidmətləri göstərir</h1>
            <div class="ulist">
                <ul>
                    <li>Torpağın analizi</li>
                    <li>Avtomatlaşdırılmış suvarma sistemi</li>
                    <li>Gübrə sifarişi</li>
                </ul>
                <ul>
                    <li>Monitoring</li>
                    <li>Anbarlara nəzarət</li>
                </ul>
            </div>
            <div style="text-align: center; padding: 15px 0;"><button class="button57" style="padding: 15px 25px">Əldə et</button></div>
        </article>
        <div class="parallax third">

        </div>
        
        <div class="infomain" id="blog">
            <h1 id="blogmain">Blog</h1> 
            <article class="info">
            
                <div class="blog">
                    <img class="myImg" id="myImg" src="img/bloq1.jpg" alt="" >
                    
    
                    <!-- The Modal -->
                    <div id="myModal" class="modal myModal">
                    <span class="close close1" >&times;</span>
                    <img class="modal-content img01" id="img01">
                    <div class="blogtxt">
                        <h1>Zeytun necə sulanmalıdır?</h1> <br>
                        <p>Ağıllı suvarma, hətta çətin mövsümlərdə belə, zeytun ağaclarınızın suvarma idarəçiliyinə tam nəzarət imkanı verir. Damcı suvarma sistemi bağınızın ölçüsünə və ya ehtiyaclarına görə fərqli dizayn edilə bilər.
                        Suvarılan zeytun ağaclarından alınan yağların tərkibindəki komponentlərin artması hesabına onların dad tərkibi yaxşılaşır.
                            <br>
                        Zeytun ağacında damcı suvarmaya üstünlük versəniz,daha yaxşı məhsul və daha yüksək yağ keyfiyyətinə nail olacaqsınız.</p>
                    </div>
                    
    
                    <div id="caption" class="caption"></div>
                    </div>
                    <div id="infotxt">
                        <h5>Zeytun necə sulanmalıdır?</h5> 
                        <p>Ağıllı suvarma, hətta çətin mövsümlərdə belə, zeytun ağaclarınızın suvarma...</p>
                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");
                        
                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg");
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img.onclick = function(){
                          modal.style.display = "block";
                          modalImg.src = this.src;
                          captionText.innerHTML = this.alt;
                        }
                        
                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close1")[0];
                        
                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() { 
                          modal.style.display = "none";
                        }
                    </script>
                </div>
                
                <div class="blog">
                    <img class="myImg" id="myImg2" src="img/bloq3.jpg" alt="" >
                    
    
                    <!-- The Modal -->
                    <div id="myModal2" class="modal myModal">
                    <span class="close close2">&times;</span>
                    <img class="modal-content img01" id="img02">
                    <div class="blogtxt">
                        <h1>Qarğıdalı necə sulanmalıdır?</h1> <br>
                        <p>Bu gün dünyada ən çox əkilən bitki qarğıdalı, ondan sonra düyü və buğdadır. Qarğıdalı qida kimi yeyilə və ya un, nişasta, yağ, bioyanacaq, heyvan yemi və s. istehsal oluna bilər. Qarğıdalı bir illik yay məhsuludur. Adətən qışın sonunda əkilir və yayda yetişir. Lakin bəzi ərazilərdə il boyu əkilir. 
                            <br>
                            Qarğıdalı böyümə zamanı su çatışmazlığına çox həssasdır. Daha yüksək məhsul əldə etmək üçün suvarmanın səmərəli idarə edilməsi vacibdir. Dəyişən iqlim şəraitində yüksək və sabit qarğıdalı məhsulu yalnız səmərəli suvarma ilə əldə edilir. Qarğıdalı bitkilərinin suvarılması üçün damlama suvarma həllərinə üstünlük verilir.</p>
                    </div>
                    
    
                    <div id="caption2" class="caption"></div>
                    </div>
                    <div id="infotxt">
                        <h5>Qarğıdalı necə sulanmalıdır?</h5> 
                        <p>Bu gün dünyada ən çox əkilən bitki qarğıdalı, ondan sonra...</p>
                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal2");
                        
                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg2");
                        var modalImg = document.getElementById("img02");
                        var captionText = document.getElementById("caption2");
                        img.onclick = function(){
                          modal.style.display = "block";
                          modalImg.src = this.src;
                          captionText.innerHTML = this.alt;
                        }
                        
                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close2")[0];
                        
                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() { 
                          modal.style.display = "none";
                        }
                    </script>
                </div>
                
                <div class="blog">
                    <img class="myImg" id="myImg3" src="img/bloq2.jpg" alt="" >
                    
    
                    <!-- The Modal -->
                    <div id="myModal3" class="modal myModal">
                    <span class="close close3">&times;</span>
                    <img class="modal-content img01" id="img03">
                    <div class="blogtxt">
                        <h1>Ağ qızılın suvarılma üsulları</h1> <br>
                        <p>Unikal mənşəyə və tarixə malik öambıq müxtəlif torpaqlarda böyüyür, lakin allüvial torpaqlarda daha yaxşı bar verir. Qumlu torpaqlar və zəif drenaj pambıq üçün uyğun deyil. Pambıq bitkisinin optimal inkişafı üçün gecə temperaturu 12 °C-dən aşağı düşməməli və bitkinin bütün ömrü boyu orta hesabla 27-32 °C arasında qalmalıdır. 
                            <br>
                            Su tələbləri iqlim və torpaqla müəyyən edilir. Suvarma adətən ilk qönçədən və ya ilk çiçəkdən başlayır. Pambıq bitkilərinin suvarılması üçün damcı suvarma və çiləmə üsuluna üstünlük verilir.</p>
                    </div>
                    
    
                    <div id="caption3" class="caption"></div>
                    </div>
                    <div id="infotxt">
                        <h5>Ağ qızılın suvarılma üsulları</h5> 
                        <p>Unikal mənşəyə və tarixə malik öambıq müxtəlif torpaqlarda böyüyür, lakin...</p>
                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal3");
                        
                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg3");
                        var modalImg = document.getElementById("img03");
                        var captionText = document.getElementById("caption3");
                        img.onclick = function(){
                          modal.style.display = "block";
                          modalImg.src = this.src;
                          captionText.innerHTML = this.alt;
                        }
                        
                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close3")[0];
                        
                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() { 
                          modal.style.display = "none";
                        }
                    </script>
                </div>
            </article>
        </div>
        
    </main>
    <footer>
        <h4>Powered by Hydrophonics &copy; 2022</h4>
    </footer>
</body>
</html>




