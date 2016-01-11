<?php

use App\Models\Joke;
use Illuminate\Database\Seeder;

class JokeTableSeeder extends Seeder
{
    public function run()
    {
        $jokes = [
            'Today a man knocked on my door | and asked for a small donation towards the local swimming pool. | I gave him a glass of water.',
            'I find it ironic | that the colors red, white, and blue stand for freedom | until they are flashing behind you.',
            'A recent study has found that women who carry a little extra weight | live longer than the men who mention it.',
            'I changed my password to "incorrect". | So whenever I forget what it is the computer will say | "Your password is incorrect".',
            'Artificial intelligence is no match for natural stupidity.',
            'Isn\'t it great to live in the 21st century? | Where deleting history has become more important than making it.',
            'I want to die peacefully in my sleep, like my grandfather. | Not screaming and yelling like the passengers in his car.',
            'It is hard to explain puns to kleptomaniacs | because they always take things literally.',
            'I used to think the brain was the most important organ. | Then I thought, look what’s telling me that.',
            'The midget fortune teller who kills his customers is a small medium at large.',
            'A farmer in the field with his cows counted 196 of them, | but when he rounded them up he had 200.',
            'What does a nosey pepper do? Get jalapeño business.',
            'The dyslexic devil worshipper sold his soul to Santa.',
            'You kill vegetarian vampires with a steak to the heart.',
            'There was a prison break and I saw a midget climb up the fence. | As he jumped down he sneered at me and I thought, | well that’s a little condescending.',
            'If you want to catch a squirrel just climb a tree and act like a nut.',
            'A magician was walking down the street and turned into a grocery store.',
            'A blind man walks into a bar. And a table. And a chair.',
            'Why don’t you ever see hippopotamus hiding in trees? | Because they’re really good at it.',
            'Did you hear about the Mexican train killer? | He had locomotives.',
            'How does NASA organize their company parties? | They planet.',
            'Why can’t you hear a pterodactyl go to the bathroom? | Because the “P” is silent.',
            'What kind of shoes do ninjas wear? | Sneakers.',
            'Why does Snoop Dogg carry an umbrella? | Fo’ drizzle.',
            'Did you hear about the new corduroy pillows? | They’re making headlines everywhere!',
            'Why was six afraid of seven? | Because seven was a well known six offender.',
            'What time is it when you have to go to the dentist? | Tooth-hurtie.',
            'The closest I’ve been to a diet this year | is erasing food searches from my browser history.',
            'What did one ocean say to the other ocean? | Nothing, they just waved.',
            'A day without sunshine is like, night.',
            'Born free, taxed to death.',
            'What is faster Hot or cold? Hot, because you can catch a cold.',
            'When everything’s coming your way, you’re in the wrong lane.',
            'I say no to alcohol, it just doesn\'t listen.',
            'If you can’t convince them, confuse them.',
            'Whenever I find the key to success, someone changes the lock.',
            'Why did the bee get married? Because he found his honey.',
            'What do you call a boomerang that doesn’t come back? A stick.',
            'Why is the man who invests all your money called a broker?',
            'Time is what keeps things from happening all at once.',
            'Lottery: a tax on people who are bad at math.',
            'If at first you don’t succeed, destroy all evidence that you tried.',
            'Eat right. Stay fit. Die anyway.',
            'I just let my mind wander, and it didn’t come back.',
            'I can handle pain until it hurts.',
            'A bargain is something you don’t need at a price you can’t resist.',
            'Do not argue with an idiot. | He will drag you down to his level and beat you with experience.',
            'Sometimes we expect more from others | because we would be willing to do that much more for them.',
            'I asked my North Korean friend how it was there, | he said he couldn\'t complain.',
            'Together, I can beat dissociative identity.',
            '"I\'m sorry" and "I apologize" mean the same thing, | except when you\'re at a funeral.',
            'I didn\'t know my dad was a construction site thief, | but when I got home all the signs were there.',
            'How Long is a Chinese name.',
            'On the other hand, you have different fingers.',
            'I used to be indecisive but now am not so sure.',
            'Exaggerations went up by a million percent last year.',
            'They all laughed when I said I wanted to be a comedian. | Well, they\'re not laughing now.',
            'My fake plants died because I forgot to pretend to water them.',
            'I used to be addicted to soap, but I\'m clean now.',
            'Studies suggest that 6 out of 7 dwarfs aren\'t happy.',
            'My favorite mythical creature? The honest politician.',
            'I was wondering why does a frisbee appear larger the closer it gets... | then it hit me.',

        ];

        foreach($jokes as $joke)
        {
            Joke::create([
                'text'   => $joke
            ]);
        }
    }
}