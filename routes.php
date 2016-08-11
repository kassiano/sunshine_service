<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 26/06/2016
 * Time: 16:23
 */
  function call($controller, $action) {
      // require the file that matches the controller name
      require_once('controllers/' . $controller . '_controller.php');

      // create a new instance of the needed controller
      switch($controller) {

          case 'service':
              require_once('models/previsao.php');
              $controller = new SunshineServiceController();
              break;

      }

      // call the action
      $controller->{ $action }();
  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('contatos' => ['home', 'error', 'novo','editar'] ,
                        'service' => ['getPrevisoes']
      );

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the contatos controller
  if (array_key_exists($controller, $controllers)) {
      if (in_array($action, $controllers[$controller])) {
          call($controller, $action);
      } else {
          call('contatos', 'error');
      }
  } else {
      call('contatos', 'error');
  }
?>
