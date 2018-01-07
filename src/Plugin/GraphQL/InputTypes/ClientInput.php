<?php

namespace Drupal\graphql_custom_mutations\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * Client input type.
 *
 * @GraphQLInputType(
 *   id = "client_input",
 *   name = "ClientInput",
 *   fields = {
 *     "title" = "String",
 *     "email" = "String",
 *   }
 * )
 */
class ClientInput extends InputTypePluginBase {

}
