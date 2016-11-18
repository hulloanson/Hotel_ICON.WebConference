// TODO: fix some inaccurate models
var models = {
    'event': {
        'name': 'string',
        'begin_time': 'Date',
        'end_time': 'Date',
        'type': 'string', // possible values:
        'venue': 'string'
    },
    'presentation': {
        'begin_time': 'Date',
        'end_time': 'Date',
        'title': 'string',
        'abstract': 'String',
        'event_id': 'ID', // FK from event
        'speaker_id': 'ID' // FK from speaker
    },
    'speaker': {
        'first_name': 'string',
        'last_name': 'string',
        'occupation': 'string'
    },
    'survey': {
        'email': 'string',
        'answers': 'Array' // of answers, embedded
    },
    'answer': {
        'q_number': 'integer',
        'value': 'string|integer|boolean'
    }
};