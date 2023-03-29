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

phpinfo();
?>