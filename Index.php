<?php
    use jcobhams\NewsApi\NewsApi;
    require_once('vendor/autoload.php');
    $newsapi = new NewsApi('ea226af5d93143c8af994f4daf830c03');
    $data = $newsapi->getEverything('politics','','indiatimes.com','','2023-09-13 ');    
?>

<html>
    <head>
        <title>Ludhiana Constituency</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="header">
            <div class="left">
                <img src="logo1.jpg" alt="Congress Logo" class="logo" />
                <div style="float:left">
                    <p class="ld">ਲੁਧਿਆਣਾ</p>
                    <p class="ldh">Ludhiana Constituency</p>
                </div>
            </div>
            <div class="right">
               <ul class="menu">
                    <li>News</li>
                    <li>Maps</li>
                    <li>History</li>
               </ul>
            </div>
        </div>
        <img src="ludhiana.jpg" alt="Ldh" class="ldimg" />
        <div class="about">
            <h2>About Ludhiana</h2>
            <p>Ludhiana city was founded in the time of Lodhi dynasty which ruled in Delhi from 1451-1526 A.D. The legend goes that two Lodhi Chief Yusaf Khan and Nihand Khan were deputed by Sikandar Lodhi (1489-1517 A.D.) to restore order in this region. They camped at the site of present city of Ludhiana which was then a village called Mir Hota. Yusaf Khan went across the river Sutlej in Jalandhar Doab to check Khokhars who were plundering the Doab and made a settlement at Sultanpur while Nihand Khan stayed back and founded the present city at the site of village Mir Hota. The new town was originally known as Lodhi-ana, which means the town of Lodi’s. The name later changed to the present name Ludhiana.<p>
            <br/>
            <div style="height:320px; width: 30%; border: solid white; padding-left:10px; background-color:white; float:left;">                
                <h2>District at a Glance</h2>
                <div style="display:flex; align-items:center;"><p class="triangle-right"></p><p style="margin:0px; margin-left:10px;">Area: 3767 Sq. Km.</p></div>
                <div style="display:flex; align-items:center;"><p class="triangle-right"></p><p style="margin:0px; margin-left:10px;">Population: 34,98,739</p></div>
                <div style="display:flex; align-items:center;"><p class="triangle-right"></p><p style="margin:0px; margin-left:10px;">Language: Punjabi</p></div>
                <div style="display:flex; align-items:center;"><p class="triangle-right"></p><p style="margin:0px; margin-left:10px;">Villages: 916</p></div>
                <div style="display:flex; align-items:center;"><p class="triangle-right"></p><p style="margin:0px; margin-left:10px;">Male: 18,67,816</p></div>
                <div style="display:flex; align-items:center;"><p class="triangle-right"></p><p style="margin:0px; margin-left:10px;">Female: 16,30,923</p></div>
            </div>
            <div class="map">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ludhiana&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanymph.com/">Gacha Nymph</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
            </div>
            <div class="image">
                <a href="Gallery.php"><img src="fateh.jpg" /></a>
                <div style="text">Gallery</div>
            </div>
        </div>
        <!--news-->
        <div class="news">
            <h1>News Article</h1>
            <?php
                foreach($data->articles as $news)
                {
            ?>
            <div class="row" style="display:flex; margin-top:10px; margin-left:20px">
                <div class="col-md-3">
                    <img style="width:340px; height:280px" src="<?php echo $news->urlToImage ?>" alt="News Thumbnail" />
                </div>
                <div class="col-md-9">
                    <h2>Title: <?php echo $news->title ?></h2>
                    <h5>Description: <?php echo $news->description ?></h5>
                    <p>Content: <?php echo $news->content ?></p>
                    <h6>Author: <?php echo $news->author ?></h6>
                    <h6>Published: <?php echo $news->publishedAt ?></h6>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </body>
</html