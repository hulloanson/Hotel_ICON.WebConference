*HTTP API of the Conference Manager Project* 

### Event
Object schema:
```JSON
{
    '_id': { '$id': 'string' },
    'name': 'string'
    'begin_time': 'string'
    'end_time': 'string'
    'type': 'string'
}
```

#### GET /api/event/all
Get all events.
#### Response
An array of Event object.

#### GET /api/event/{id}
Get event by its `id`. Note that ID is the ObjectID of the event.
##### Response
An Event object.

#### GET /api/event/search/{title}
Match events by the `title` provided.
##### Response
An array of Event object.

#### GET /api/event/date/{year}/{month}/{day}
Get events on a give date.
##### Response
An array of Event object.

### Speaker
Object schema:
```JSON
{
    '_id': { '$id': 'string' },
    'first_name': 'string',
    'last_name': 'string',
    'occupation': 'string'
}
```

#### GET /api/speaker/all
Get all speakers.
##### Response
An array of Speaker object.

#### GET /api/speaker/{id}
Get speaker by `id`.
##### Response
A Speaker object.

#### GET /api/speaker/{id}/abstract
Get all the papers that the Speaker with `id` will talk about.
##### Response
An array of Abstract object.

#### GET /api/speaker/search/{name}
Get all speakers that match name. `name` is made up of keywords separated by comma or space, or both.
##### Response
An array of Speaker objects

### Abstract
Object schema:
```JSON
{
    '_id': { '$id': 'string' },
    'authors': string,
    'abstract': string
}
```
#### GET /api/abstract/all
Get all abstracts
##### Response
An array of Abstract objects

#### GET /api/abstract/{id}
Get abstract by ID
##### Response
An Abstract object

#### GET /api/abstract/{id}/speaker
Get the Speaker of an abstract.
###### Parameters
`id`: string. String content of the ObjectID.
##### Response

#### GET /api/abstract/{id}/presentation
Get the Presentation in which the abstract will be talked about.
###### Parameters
`id`: string. String content of the ObjectID.
##### Response
A Presentation object.

### Presentation
Object schema:
```JSON
{
    '_id': { '$id': 'string' },
    'abstract_id': 'string',
    'speaker_id': 'string',
    'begin_time': 'string',
    'end_time': 'string',
    'venue': 'string'
}
```
#### GET /api/presentation/all
Get all Presentations
##### Response
An array of Presentation objects

#### GET /api/presentation/{id}/event
Get the event which the presentation is in.
###### Parameters
`id`: string. String content of the ObjectID.
##### Response
An Event object.

#### GET /api/presentation/{id}/abstract
Get the Abstract featured in the Presentation.
###### Parameters
`id`: string. String content of the ObjectID.
##### Response
An Abstract object.

#### GET /api/presentation/{id}/speaker
Get the Speaker whom will give a speech in.
###### Parameters
`id`: string. String content of the ObjectID.
##### Response
A Speaker object.

### Survey
Object schema:
```JSON
{
    '_id': { '$id': 'string' },
    'email': 'string',
    'answers': 'array'
}
```
#### POST /api/survey/
Submit a survey.
###### Parameters
Schema of expected POST object:
```JSON
{
    'email': 'string',
    'answers': [
        'string',
         ...
    ]
}
```*
*Note: `answers` is an array of string with answers in order of the questions.*
##### Response
An object with following schema:
```JSON
{
    'success': boolean
}
```

#### GET /api/survey/all
Get all submitted surveys.
##### Response
An array of Survey objects.

#### GET /api/survey/{email}
Get a survey by email. The email is matched exactly.
###### Parameters
`email`: string. The email to be matched.
##### Response
A Survey object.

### Question
Object schema:
```JSON
{
    'order': 'integer',
    'question': 'string',
    'type': 'string',
    ['choices': 'array]
}
```

#### GET /api/question/all
Get all questions.
##### Response
An array of Question objects.

#### POST /api/question
Add one or more questions to the database.
###### Parameters
Schema of expected POST object:
```JSON
[
    {
        'order': 'integer',
        'question': 'string',
        'type': 'string',
        ['choices': 'array]
    },
    ...
]
```

##### Response
Object with following schema:
```JSON
{
    'success': boolean
}
```


### Search (Not implmented yet)
#### GET /api/search/{searchString}
Match all text fields in the database.
###### Parameters
`searchString`: string. It is made up of keywords separated by comma, blank spaces, or both.
##### Response
An object containing arrays of different matched types of entities mentioned above.
