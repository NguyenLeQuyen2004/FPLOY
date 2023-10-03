<main class="catalog  mb ">
          
            <div class="boxleft">
                 <div class="banner">
                    <img id="banner" src="./img/anh0.jpg" alt="">
                    <button class="pre" onclick="pre()">&#10094;</button>
                    <button class="next" onclick="next()">&#10095;</button>
                 </div>
                
                  <div class="items">
                     <?php
                        foreach ($list_sp as $sp){
                           // var_dump();
                           extract($sp);
                           $link = "index.php?act=sanphamct&idsp=" .$id;
                           echo 'div class="box_items">
                           <div class="box_items_img">
                              <img src="img/' .$img.'" alt="">
                              <div class="add" href="">ADD TO CART</div>
                           </div>
                            <a class="item_name" href=" '. $link .'">' . $name. '</a>
                            <p class="price">'.$price. '</p> 
                           
                            </div>' ;

                        }
                     ?>  
        </div>
      </div>
           <?php 
            include "boxright.php";
           ?>
        </main>
        <!-- BANNER 2 -->