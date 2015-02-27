<?php
/**
 * @file
 *
 * Simple node controller.
 */

namespace CW\Controller;

/**
 * Class NodeController
 * @package CW\Controller
 *
 * Most basic implementation of node controller.
 */
class NodeController extends AbstractEntityController {

  /**
   * {@inheritdoc}
   */
  public static function getClassEntityType() {
    return 'node';
  }

}
