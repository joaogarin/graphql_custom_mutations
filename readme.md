# Drupal custom graphql mutation example

This code provides example on mutation on a custom content type "Client" for Drupal using [Drupal GraphQL](https://github.com/drupal-graphql/graphql)

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
      ...on NodePage {
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
