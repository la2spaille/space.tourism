<?php

namespace App\Controller\Page;

use \Engine\Controller\Controller;

class Home extends Controller {

    public function show () {

        /*------------------------------------
            MESSAGE
        ------------------------------------*/

        $this->data->msg = 'Home';

        /*------------------------------------
            HEAD
        ------------------------------------*/

        // SEO
        $this->head['title'] = 'Space Tourism — Home';
        $this->head['description'] = '';
        $this->head['opengraph'] = '/og/home.png';

        // Robots
        $this->head['allow-robots'] = true;

        /*------------------------------------
            RENDER
        ------------------------------------*/

        $this->render('home');
    }

}
