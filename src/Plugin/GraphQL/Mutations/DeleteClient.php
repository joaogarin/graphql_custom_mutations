<?php

namespace Drupal\graphql_custom_mutations\Plugin\GraphQL\Mutations;


use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\DeleteEntityBase;


/**
 *  A Simple Client mutation.
 *
 * @GraphQLMutation(
 *   id = "delete_client",
 *   entity_type = "node",
 *   entity_bundle = "client",
 *   secure = true,
 *   name = "deleteClient",
 *   type = "EntityCrudOutput",
 *   arguments = {
 *     "id" = "Int"
 *   }
 * )
 */
class DeleteClient extends DeleteEntityBase {

}