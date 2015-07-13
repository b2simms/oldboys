<!DOCTYPE html><!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" xml:lang="en"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en" xml:lang="en"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9" lang="en" xml:lang="en"><![endif]--><!--[if gt IE 8]><!--><html class="no-js" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>    <title>Old Boys Soccer League</title>  <link rel="stylesheet" href="css/uikit.min.css" />  <script src="jquery-2.1.4.min.js"></script>  <script src="js/uikit.min.js"> </script>    <link type='text/css' title='standard' rel='stylesheet' href='style_scorers.css' />  <link type='text/css' title='standard' rel='stylesheet' href='media.css' /></head><body class="en" >  <div class="container">        <div class="navbar navbar-sectionheader">                <div class="header-top">           <img class="header-image" src="../oldboys_pictures/OldboysLogoPNG.png" />        </div>                <div class="menu-wrap">           <!-- This is the container enabling the JavaScript -->          <div class="uk-button-dropdown" data-uk-dropdown>            <!-- This is the button toggling the dropdown -->            <button class="uk-button"> </button>            <!-- This is the dropdown -->            <div class="uk-dropdown uk-dropdown-small">                <ul class="uk-nav uk-nav-dropdown">                    <li><a href="../web/schedule.php">Matches</a></li>                    <li><a href="../web/standings.php">Standings</a></li>                    <li><a href="../web/scorers.php">Scorers</a></li>                    <li><a href="../web/messaging.php">Messaging</a></li>                </ul>            </div>          </div>          <ul id="menu">            <li>              <a title="Matches" href="../web/schedule.php"><span>Matches</span></a>            </li>            <li>              <a title="Standings" href="../web/standings.php"><span>Standings</span></a>            </li>            <li>              <a title="Scorers" href="../web/scorers.php"><span>Scorers</span></a>            </li>            <li>              <a title="Messaging" href="../web/messaging.php"><span>Messaging</span></a>            </li>          </ul>        </div>          </div>                    <?php            include_once '../scorers.php';            $scorers = new Scorers();             $scorersAll = json_decode( $scorers->getScorers() );             $games = $scorersAll->games;                     ?>                                                      <?php foreach($games as $row): ?>                                                                         <div class="uk-grid">                        <div class="uk-width-1-5">                                                      <div class="team1_image">                              <span class="team1-png"><img src=                                <?php                                   switch($row->team) {                                    case "Fredericton Kia":                                        echo "../oldboys_pictures/frederictonkia.png";                                        break;                                    case "Gunners":                                        echo "../oldboys_pictures/gunners.png";                                        break;                                    case "Sporting":                                        echo "../oldboys_pictures/sporting.png";                                        break;                                    case "Growlers United":                                        echo "../oldboys_pictures/growlers.png";                                        break;                                    case "Picaroons":                                        echo "../oldboys_pictures/picaroons.png";                                        break;                                    case "Rogue Galleons":                                        echo "../oldboys_pictures/galleons.png";                                        break;                                    default:                                        echo "../oldboys_pictures/OldboysLogoPNG.png";                                        break;                                  }                                                                  ?> /></span>                            </div>                                                                            </div>                          <div class="uk-width-3-5">                            <div class="uk-grid">                              <div class="uk-width-1-2">                                                                  <span class="locationText">                                    <?= $row->first_name ?> <?= $row->last_name ?>                                  </span>                                                              </div>                              <div class="uk-width-1-2">                                                                    <span class="scoreText">                                    <?= $row->team ?>                                                                       </span>                                                             </div>                                                             </div>                                                    </div>                          <div class="uk-width-1-5">                                                 <span class="goalsText">                                <?= $row->goals ?>                            </span>                        </div>                      </div>                    <br />                             <?php endforeach; ?><?php echo ob_get_clean(); ?>      </div>  </body></html>