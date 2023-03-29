<?php
    require __DIR__ . '/vendor/autoload.php';

    use Elastic\Elasticsearch\ClientBuilder;

    $voc = fopen("vocabulary.txt","r");

    $client = ClientBuilder::create()
        ->setHosts(["elasticsearch:9200"])
        ->build();

    while(!feof($voc)) {
        $word = fgets($voc);
        $params = [
            'index' => 'dictionary',
            'body' => ['word' => $word]
        ];

        $client->index($params);

    }

    echo "Done";