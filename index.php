<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 8/22/18
 * Time: 5:16 PM
 */
include "include/header.php";
?>
<section>
    <div class="container">
        <div class="row blue-border-bottom" id="main">
            <div class="col-md-8">
                <div class="card" id="main-post" >
                    <p class="category"><a href="events.php">Events</a></p>
                    <div class="image-overflow">
                        <img src="./images/deerwalk-premises.jpg" class="image">
                    </div>
                    <a class="posts-title" href="article.php"><h3>Lorem ipsum dolor sit amet, an indoctum </h3></a>
                    <p> Lorem ipsum dolor sit amet, an indoctum aliquando argumentum sed, facer labores at eum. Sit eruditi                        Lorem ipsum dolor sit amet, an indoctum aliquando argumentum sed, facer labores at eum. Sit eruditi fuisset gubergren at, graeco denique consectetuer mea ea. Ad epicuri molestiae vis. Per deleniti dissentiunt ut, ne dictas possim veritus vim, his esse prompta ad. Fugit instructior ex sed.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"   id="editors-choice">
                    <div class="choice">
                    <p class="column text-center"> Editor's Column</p>
                        <ul class="blue-border-top blue-border-bottom">
                            <li>
                                <a href="#"><h5> Lorem ipsum dolor sit amet, an indoctum aliquando arg</h5></a>
                            </li>
                            <li>
                                <a href="#"><h5> Lorem ipsum dolor sit amet, an indoctum aliquando arg</h5></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card" id="popular-post">
                    <div class="choice">
                        <p class="column text-center"> Popular Post</p>
                        <ul class="blue-border-top blue-border-bottom">
                            <li>
                                <a href="#"><h5> Lorem ipsum dolor sit amet, an indoctum aliquando arg</h5></a>
                            </li>
                            <li>
                                <a href="#"><h5> Lorem ipsum dolor sit amet, an indoctum aliquando arg</h5></a>
                            </li>
                            <li>
                                <a href="#"><h5> Lorem ipsum dolor sit amet, an indoctum aliquando arg</h5></a>
                            </li>
                            <li>
                                <a href="#"><h5> Lorem ipsum dolor sit amet, an indoctum aliquando arg</h5></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row" >
        <div class="col-md-12">
            <div>
                <p class="column text-center ">College Videos</p>

            </div>
        </div>
        <div class="col-md-12 card" id="college-video">
            <div class="row">
                <div class="col-md-9">
                    <div class="news" id="news-video">
                        <iframe id="video-main"  width="600" height="550" src="https://www.youtube.com/embed/fG6UjvckLQw" frameborder="0" ></iframe>
                    </div>
                </div>

                <div class="col-md-3">
                    <div  id="video">
                        <div class="row">
                            <img src="http://img.youtube.com/vi/qS5FzBkrYrE/0.jpg" class="video-small" id="1" onclick="go('https://www.youtube.com/embed/qS5FzBkrYrE',1)">

                        </div>
                        <div class="row">
                            <img src="http://img.youtube.com/vi/7X9qs4KBPrI/0.jpg" id="2" class="video-small" onclick="go('https://www.youtube.com/embed/7X9qs4KBPrI',2)">
                        </div>
                        <div class="row">
                            <img src="http://img.youtube.com/vi/5yU8PUDPL_0/0.jpg" class="video-small" id="3"  onclick="go('https://www.youtube.com/embed/5yU8PUDPL_0',3)">
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </div>
    </div>
    <div class="container">
        <div class="row blue-border-top">
         <div class="col-md-12" >
             <div>
                 <p class="column text-center ">Latest News</p>
             </div>
         </div>
            <div class="col-md-12 card" id="posts">
                 <div class="row" id="latest-news">
                     <div class="col-md-4 image-overflow"> <img src="images/deerwalk-premises.jpg" class="small-image"></div>
                     <div class="col-md-7">
                         <p class="category"><a href="college.php">College</a></p>
                         <h3><a>Title</a></h3>
                         <p class="published-date"> 2018/07/08</p>
                         <p class="author">By <a>Author</a></p>
                         <p class="blue-border-top"> Lorem ipsum dolor sit amet, an indoctum aliquando argumentum sed, facer labores at eum. Sit eruditi fuisset gubergren at, graeco denique consectetuer mea ea. Ad epicuri molestiae vis. Per deleniti dissentiunt ut, ne dictas possim veritus vim, his esse prompta ad. Fugit instructior ex sed.</p>
                     </div>
                 </div>
                 <div class="row" id="latest-news">
                     <div class="col-md-4 image-overflow"> <img src="images/deerwalk-premises.jpg" class="small-image"></div>
                     <div class="col-md-7">
                         <p class="category"><a href="technology.php">Technology</a></p>
                         <h3><a>Title</a></h3>
                         <p class="published-date"> 2018/07/08</p>
                         <p class="author">By <a>Author</a></p>
                         <p class="blue-border-top"> Lorem ipsum dolor sit amet, an indoctum aliquando argumentum sed, facer labores at eum. Sit eruditi fuisset gubergren at, graeco denique consectetuer mea ea. Ad epicuri molestiae vis. Per deleniti dissentiunt ut, ne dictas possim veritus vim, his esse prompta ad. Fugit instructior ex sed.</p>
                     </div>
                 </div>
                 <div class="row" id="latest-news">
                     <div class="col-md-4 image-overflow"> <img src="images/deerwalk-premises.jpg" class="small-image"></div>
                     <div class="col-md-7">
                         <p class="category"><a href="opinion.php">Opinion</a></p>
                         <h3><a>Title</a></h3>
                         <p class="published-date"> 2018/07/08</p>
                         <p class="author">By <a>Author</a></p>
                         <p class="blue-border-top"> Lorem ipsum dolor sit amet, an indoctum aliquando argumentum sed, facer labores at eum. Sit eruditi fuisset gubergren at, graeco denique consectetuer mea ea. Ad epicuri molestiae vis. Per deleniti dissentiunt ut, ne dictas possim veritus vim, his esse prompta ad. Fugit instructior ex sed.</p>
                     </div>
                 </div>
             </div>
        </div>
          </div>
</section>
<?php
include "include/footer.php";
?>