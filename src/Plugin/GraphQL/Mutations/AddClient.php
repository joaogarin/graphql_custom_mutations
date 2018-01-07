<?php

namespace Drupal\graphql_custom_mutations\Plugin\GraphQL\Mutations;


use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\GraphQL\Type\InputObjectType;
use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\CreateEntityBase;
use Youshido\GraphQL\Execution\ResolveInfo;


/**
 *  A Simple Client mutation.
 *
 * @GraphQLMutation(
 *   id = "add_client",
 *   entity_type = "node",
 *   entity_bundle = "client",
 *   secure = true,
 *   name = "addClient",
 *   type = "EntityCrudOutput",
 *   arguments = {
 *      "input" = "ClientInput"
 *   }
 * )
 */
class AddClient extends CreateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(array $inputArgs, InputObjectType $inputType, ResolveInfo $info) {
    return [
      'title' => $inputArgs['title'],
      'email' => $inputArgs['email']
    ];
  }
}