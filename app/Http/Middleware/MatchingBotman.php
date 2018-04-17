<?php

namespace App\Http\Middleware;

use BotMan\BotMan\Interfaces\Middleware\Matching;

class MatchingBotman implements Matching
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function matching(IncomingMessage $message, $pattern, $regexMatched)
    {
        return $regexMatched && $message->getSender() === 'Administrator';
    }
}
