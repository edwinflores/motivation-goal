<?php

use App\Models\Quote;
use Illuminate\Database\Seeder;

class JokeTableSeeder extends Seeder
{
    public function run()
    {
        $jokes = [
            'Today a man knocked on my door and asked for a small donation towards the local swimming pool. I gave him a glass of water.',
            'I find it ironic that the colors red, white, and blue stand for freedom until they are flashing behind you.',
            'A recent study has found that women who carry a little extra weight live longer than the men who mention it.',
            'I changed my password to "incorrect". So whenever I forget what it is the computer will say "Your password is incorrect".',
            'Artificial intelligence is no match for natural stupidity.',
            'Isn\'t it great to live in the 21st century? Where deleting history has become more important than making it.',
            'I want to die peacefully in my sleep, like my grandfather. Not screaming and yelling like the passengers in his car.',
            'It is hard to explain puns to kleptomaniacs because they always take things literally.',
            'I used to think the brain was the most important organ. Then I thought, look what’s telling me that.',
            'The midget fortune teller who kills his customers is a small medium at large.',
            'A farmer in the field with his cows counted 196 of them, but when he rounded them up he had 200.',
            'What does a nosey pepper do? Get jalapeño business.',
            'The dyslexic devil worshipper sold his soul to Santa.',
            'You kill vegetarian vampires with a steak to the heart.',
            'There was a prison break and I saw a midget climb up the fence. As he jumped down her sneered at me and I thought, well that’s a little condescending.',
            'If you want to catch a squirrel just climb a tree and act like a nut.',
            'A magician was walking down the street and turned into a grocery store.',
            'A blind man walks into a bar. And a table. And a chair.',
            'Why don’t you ever see hippopotamus hiding in trees? Because they’re really good at it.',
            'Did you hear about the Mexican train killer? He had locomotives.',
            'How does NASA organize their company parties? They planet.',
            'Why can’t you hear a pterodactyl go to the bathroom? Because the “P” is silent.',
            'What kind of shoes do ninjas wear? Sneakers.',
            'Why does Snoop Dogg carry an umbrella? Fo’ drizzle.',
            'Did you hear about the new corduroy pillows? They’re making headlines everywhere!',
            'Why was six afraid of seven? Because seven was a well known six offender.',
            'What time is it when you have to go to the dentist? Tooth-hurtie.',
            'The closest I’ve been to a diet this year is erasing food searches from my browser history.',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',

        ];

        foreach($jokes as $joke)
        {
            Quote::create([
                'text'   => $joke
            ]);
        }
    }
}