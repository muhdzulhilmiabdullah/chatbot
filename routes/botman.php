<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('hi', function ($bot) {
$bot->reply('Hi! Welcome to Bioinformatics ChatBot');
$bot->reply('Before we start, can I know your name ?');
});

$botman->hears('hello', function ($bot) {
$bot->reply('Hello! Welcome to Bioinformatics ChatBot');
$bot->reply('Before we start, can I know your name ?');
});

$botman->hears('apa khabar', function ($bot) {
$bot->reply('Khabar baik! Selamat datang ke Bioinformatics ChatBot');
$bot->reply('Sebelum kita mula, boleh saya tahu nama anda ?');
});

$botman->hears('my name is {name}', function ($bot, $name) {
$bot->reply('Hi, '.$name .'. Ask me a question.');
});

$botman->hears('call me {name}', function ($bot, $name) {
$bot->reply('Hi, '.$name .'. May I help you?');
});

$botman->hears('where can i register Arkgene', function ($bot) {
$bot->reply('You can register here: '."<a href='https://portal.arkgene.com/register' target='_blank'>Link</a>");
});

$botman->hears('How much does Arkgene cost', function ($bot) {
$bot->reply('Sorry, I do not have a clue on that.');
});
//process for topic
function processTopic($topic) {

	$ans = \App\Bi::where('topic', $topic)->first();
	return $ans;

}

$botman->hears('what is {topic}', function ($bot, $topic) {
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply($ans->information);
	}
});

$botman->hears('can you tell me about {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply($ans->information);
	}	
});

$botman->hears('define {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply($ans->information);
	}	
});

$botman->hears('do you know about {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply('Yes, I do. '.$ans->information);
	}	
});

$botman->hears('tell me about {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply($ans->information);
	}	
});

$botman->hears('tell me more about {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply("To learn more about $topic, you can visit this link: "."<a href='$ans->link' target='_blank'>Link</a>");
	}	
});

$botman->hears('learn more {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply("To learn more about $topic, you can visit this link: "."<a href='$ans->link' target='_blank'>Link</a>");
	}	
});

$botman->hears('learn more about {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply("To learn more about $topic, you can visit this link: "."<a href='$ans->link' target='_blank'>Link</a>");
	}	
});

$botman->hears('give me a link to {topic}', function ($bot, $topic){
	$ans = processTopic($topic);
	if(!$ans){
		$bot->reply('Answer not found. Try again.');
	} else {
		$bot->reply('To learn more, you can visit this link: '."<a href='$ans->link' target='_blank'>Learn more about $topic</a>");
	}	
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');


