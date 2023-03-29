<?php
require __DIR__ . '/vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;


$client = ClientBuilder::create()
    ->setHosts(['elasticsearch:9200'])
    ->build();

if ($client->ping()) {
    echo "Connected to Elasticsearch successfully.";
} else {
    echo "Failed to connect to Elasticsearch.";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>

    <script>
        $( function() {
            $( "#text" ).autocomplete({
                source: "search.php",
                minLength: 2,

            });
        } );
    </script>
</head>
<body>

<div class="ui-widget">
    <label for="text">Text: </label>
    <input id="text">
</div>




</body>
</html>