# Drupal custom graphql mutation example

This code provides example on mutation on a custom content type "Client" for Drupal using [Drupal GraphQL](https://github.com/drupal-graphql/graphql)

For this example I assume a content type called “Client” exists in the Drupal installation (just setup a content type with name Client, machine name should be client). Also this content type should have some fields created :

email
telephone

## Installation

Put this inside your modules/custom folder and go to extensions in your drupal site and enable the module. Or run : 

```
drush en graphql_custom_mutations
```

ADD MUTATION
```$xslt
mutation {
  addClient(input:{title:"Client name", email:"hello@world.com"}){
    entity{
      ...on NodeClient {
        nid,
        title,
        email
      }
    }
  }
}

```

RESULT

```$xslt
{
  "data": {
    "addClient": {
      "entity": {
        "nid": 111,
        "title": "Client name",
        "email": "hello@world.com"
      }
    }
  }
}
```

---


DELETE MUTATION
```$xslt
mutation {
  deleteClient(id:111){
    entity{
      ...on NodeClient {
        nid
      }
    }
  }
}

```


RESULT

```$xslt
{
  "data": {
    "deleteClient": {
      "entity": {
        "nid": 111
      }
    }
  }
}
```
