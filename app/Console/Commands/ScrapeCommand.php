<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;


class ScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape The Website';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $client = new Client(HttpClient::create(['timeout' => 60]));
        // $crawler->filter('iframe')->each(function ($node) {
        //     print $node->link()."\n";
        // });

        // $crawler->filter('.video-embed clearfix > iframe')->each(function($node) {
        //     $url = $node->attr('href');
        //     $text = $node->text();
        // });

        // $link = $crawler->filter('iframe')->link();

        // print $link;

        // $linkCrawler = $crawler->selectLink('Edit');
        // $link = $linkCrawler->link();

        // print $link;
    }
}
