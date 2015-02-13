<?php
/**
 * @file
 */

namespace CW\Model;

/**
 * Interface IEntityModelConstructor
 * @package CW\Model
 *
 * Interface for entity constructors.
 */
interface IEntityModelConstructor {

  /**
   * Constructor.
   *
   * @param \CW\Model\ObjectHandler $objectLoader
   * @param string $entity_type
   *  Entity type name.
   * @param string $entity_id
   *  Entity ID.
   */
  public function __construct(ObjectHandler $objectLoader, $entity_type, $entity_id);

}