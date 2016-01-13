<?php

use App\Models\Scare;
use Illuminate\Database\Seeder;

class ScareTableSeeder extends Seeder
{
    public function run()
    {
        $scares = [
            'It was the sound of the first scoop of dirt | hitting the lid of the coffin that woke me.',
            '"I can\'t sleep," she whispered, | crawling into bed with me as I woke up, cold, | clutching the dress she was buried in',
            'The last person on Earth sat alone in a room, | there was a knock on the door.',
            'I sat there holding the body, | knowing no one would believe me.',
            'I loved the beat of her heart so deeply, | I\'d consider myself even more crazy | if I didn\'t cut it out, | string it on a metal chain, | and wear it close to my own.  ',
            'Let me introduce you to a great business opportunity.',
            'And she said, | "Don\'t worry honey, | close your eyes | and just think about seeing Nana again soon."',
            'You are now breathing manually. Dont forget.',
            'My daughter cries and screams every night. | I visit her grave and ask her to stop, | but it doesn’t help.',
            'I woke up to hear knocking on glass. | At first, I thought it was the window | until I heard it come from the mirror again.',
            'I came home to see my girlfriend cradling our child. | I didn’t know which was more frightening, | seeing my dead girlfriend and stillborn child, | or knowing that someone broke into my apartment | to place them there.',
            'My sister says that mommy killed her. | Mommy says that I don’t have a sister',
            'My neighborhood was particularly loud tonight. | There’s nothing but a graveyard near my house for miles.',
            'He lost track of time | as he stared into her beautiful eyes. | When the doorbell rang | he placed them back into the freezer.',
            'My students love me with all their hearts. | I just wish they wouldn’t leave a mess.',
            'A blink is all it takes for your world to end.',
            'Up until the first one bit him, | he thought it was a joke.',
            'Note to self. | The moment you read this, | RUN.',
            'I went to a party | hoping to get another notch on my belt. | Now I am just another ornament on her wall.',
            'Are you sure the only you is you?',
            'Does it bother you to think | that you could be inhaling someone\'s ashes.',
            'My shadow is wrong it has no head. | There\'s a man with an axe next to by bed.',
            'Duct tape, rope, blindfold, knife : $54.06 . | Getting out of the friend zone : Priceless',
            'Every time I yell I hear an echo. | So why is it that I hear the echo before I even yell?',
            'Stop for a moment. | Do you feel it? | It\'s crawling under your skin.',
            'She was 7 months pregnant when she died, | I visited their grave daily. | Until the day I heard a baby cry beneath the earth.',
            'I don\'t care if it ends up burning me, | I just need to know how it feels like again.',
            'Two mirrors stood opposed, and I stood between. | Infinite faces my forlorn expression reflected, | but one just seemed to grin.',
            'I saw the demon. | Inside you.',
            'I had a horrible nightmare. | What I woke up to was worse.',
            'I looked at my reflection. | It blinked.',
            'His eyes were on the road. | Quite possibly the most unpleasant car crash I\'ve ever seen.',
            'Sitting at my desk, my luggage starts to rattle. | I\'m pretty sure I slit her throat.',
            'His eyes were on the road. | Quite possibly the most unpleasant car crash | I\'ve ever seen.',
            '"They say smile, and the world smiles with you, right?" | As he undid the gag, he said  | "Let\'s see if the same is true of screaming."',
            'Did you see it?',
        ];

        foreach($scares as $scare)
        {
            Scare::create([
                'text'   => $scare
            ]);
        }
    }
}