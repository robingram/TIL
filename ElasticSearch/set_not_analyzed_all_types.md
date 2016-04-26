# Set a property on all types to be not_analyzed

Say you have some documents that are referenced by a _path_ parameter that contains slashes. You would want to set _path_ to be `not_analyzed` if you wanted to match a document exactly by its full path. If the documents are categorised into different types, and you don't know all the types up-front, then this could become a maintenance task for setting the property to `not_analyzed` for each new type.

The best way around this is to set the default mapping for the property.

    PUT /my_index/_mapping/_default_
    {
      "dynamic_templates": [
        {
          "not_analyzed": {
            "match_mapping_type": "string",
            "match": "path",
            "mapping": {
              "type": "string",
              "index": "not_analyzed"
            }
          }
        }
      ]
    }

[Related SO post](http://stackoverflow.com/questions/34748809/set-fields-to-not-analysed-in-all-future-types-under-an-index-in-elasticsearch)
