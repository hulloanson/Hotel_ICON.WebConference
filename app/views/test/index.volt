{{ result }}
{% if success %}
    <span>Now trying to read it from DB: </span><br>
    <span>All objects in the test-conapp collection: {{ read_result }}</span>
{% endif %}
