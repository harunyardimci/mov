<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hyardimci
 * Date: 8/19/12
 * Time: 1:47 PM
 * To change this template use File | Settings | File Templates.
 */
    header("Cache-Control: no-cache");

    require_once 'config/config.php';
    require_once APPLICATION_PATH . '/lib/request.class.php';

    $keyword = htmlentities(strip_tags(stripslashes($_GET['keyword'])));

    $req = new request();
    $result = $req->suggest($keyword);

    echo '<div class="movie-results"><ul>';

    if ( is_array($result) ) {
        foreach ($result['d'] as $suggestion) {

            $result = file_put_contents('posters/'. $suggestion['id'] .'.jpg', file_get_contents($suggestion['i'][0]));
            if ( $result === false) {
                $resultAgain = file_put_contents('posters/'. $suggestion['id'] .'.jpg', file_get_contents($suggestion['i'][0]));
                if ($resultAgain === false ) {
                    echo '<li><img src="posters/no_picture.jpg" alt="'.$suggestion['l'].'" width="150"/></li>';
                }
            }
            echo '<li><img src="posters/'.$suggestion['id'].'.jpg" alt="'.$suggestion['l'].'" width="150"/></li>';
        }
    } else {
        echo "Opps!! No Movie Found :(";
    }

echo '</ul></div>';