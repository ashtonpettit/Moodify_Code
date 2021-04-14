
                <?php

                include 'backend.php';

                $diaryContent = getQuery("SELECT * FROM overview");
                foreach($diaryContent as $item) {
                    ?>
                <div class="content">
                    <p class="numID"><?php echo $item['id'] ?></p>                   
                    <div class="top">
                        <div class="insideDiv"><img src="images/<?php echo $item['image'] ?>.jpg"></div>
                        <div class="insideDiv">
                            <h2><?php echo $item['mood'] ?></h2><br>
                            <h2><?php echo $item['mood'] ?></h2><br>
                            <h2><?php echo $item['mood'] ?></h2><br>            
                        </div>
                        <div class="insideDiv">
                            <p>Song Artist</p><br>
                            <p><?php echo $item['song'] ?><p>

                        </div>
                    </div>

                    <div class="bottom">
                        <div class="insideDiv"><p><?php echo $item['in_text'] ?></p></div>
                    </div>
                </div>                                    
            <?php
                }
            ?>