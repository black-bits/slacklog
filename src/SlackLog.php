<?php

namespace BlackBits\SlackLog;

use Carbon\Carbon;
use GuzzleHttp\Client as GuzzleClient;


class SlackLog
{
    protected $slack_webhook;
    protected $client;

    public function __construct($slack_webhook)
    {
        $this->slack_webhook = $slack_webhook;
        $this->client = new GuzzleClient();
    }

    public function send($message, $id = null)
    {
        if (!$id)
            $id = config('app.name', 'slackbot');

        $this->client->request(
            'POST',
            $this->slack_webhook,
            ['json' => ['text' => $this->createMessage($message, $id)]]
        );
    }

    protected function createMessage($message, $id)
    {
        return "*{$id}* _sends at_ {$this->getNow()} ```{$message}```";
    }

    protected function getNow()
    {
        return Carbon::now(config('app.timezone', 'UTC'));
    }
}
