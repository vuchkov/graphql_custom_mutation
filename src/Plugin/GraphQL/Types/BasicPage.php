<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Types;

use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * A Page type.
 *
 * @GraphQLType(
 *   id = "basic_page",
 *   name = "BasicPage",
 *   interfaces = {"Page"},
 * )
 */
class BasicPage extends TypePluginBase {

  /**
   * {@inheritdoc}
   */
  public function applies($value, ResolveInfo $info = NULL) {
    return $value['type'] == 'BasicPage';
  }

}
