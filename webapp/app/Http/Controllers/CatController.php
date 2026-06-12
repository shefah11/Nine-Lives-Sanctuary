<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    // A private function to hold all your cat descriptions safely
    private function getCatsData()
    {
        return [
            'rocket' => [
                'name' => 'Rocket', 'gender' => 'Male', 'age' => '3 months', 'fee' => 'RM80',
                'short_desc' => 'A hyperactive little kitten who loves to zoom around and play chase!',
                'long_desc_1' => 'Rocket is a sweet, hyperactive 3-month-old kitten with a galaxy-sized personality!',
                'long_desc_2' => 'True to his name, he loves to zoom across rooms, bounce after toy mice, and explore every nook and cranny he can find.',
                'images' => ['/images/rocket1.jpg','/images/rocket2.jpg']
            ],
            'emma' => [
                'name' => 'Emma', 'gender' => 'Female', 'age' => '1 year', 'fee' => 'RM80',
                'short_desc' => 'Gentle, curious, and just starting to discover her favorite nap spots.',
                'long_desc_1' => 'Emma is a lovely 1-year-old female cat who is blossoming into a wonderfully affectionate companion.',
                'long_desc_2' => 'She has left her hyper kitten days behind and prefers exploring her surroundings with a calm, curious grace.',
                'images' => ['/images/emma1.jpg','/images/emma2.jpg']
            ],
            'shox' => [
                'name' => 'Shox', 'gender' => 'Male', 'age' => '4 years', 'fee' => 'RM80',
                'short_desc' => 'A mature, confident gentleman who rules his cardboard castles with charm.',
                'long_desc_1' => 'Shox is a handsome 4-year-old male cat with a confident and steady personality.',
                'long_desc_2' => 'He knows exactly what he wants—which is usually chin scratches and a sunny spot by the window.',
                'images' => ['/images/shox1.jpg','/images/shox2.jpg']
            ],
            'luke' => [
                'name' => 'Luke', 'gender' => 'Male', 'age' => '2 years', 'fee' => 'RM80',
                'short_desc' => 'A goofy, energetic boy who treats every day like an adventure.',
                'long_desc_1' => 'Luke is a charming 2-year-old male cat bursting with playfulness and youthful spirit.',
                'long_desc_2' => 'He is incredibly social and loves intercepting his humans for headbutts and attention.',
                'images' => ['/images/luke1.jpg','/images/luke2.jpg']
            ],
            'oyen' => [
                'name' => 'Oyen', 'gender' => 'Female', 'age' => '8 years', 'fee' => 'RM80',
                'short_desc' => 'A wise, sweet senior lady who specializes in loud purrs and heavy cuddling.',
                'long_desc_1' => 'Oyen is a beautiful 8-year-old ginger matriarch who values peace, quiet, and deep comfort.',
                'long_desc_2' => 'As a refined senior cat, she has mastered the art of relaxation and will gladly supervise your daily routine.',
                'images' => ['/images/oyen1.jpg','/images/oyen2.jpg']
            ],
            'akiff' => [
                'name' => 'Akiff', 'gender' => 'Male', 'age' => '2 years', 'fee' => 'RM80',
                'short_desc' => 'Intelligent, highly curious, and always looking for a game to play.',
                'long_desc_1' => 'Akiff is a clever 2-year-old male cat who loves treating his environment like a puzzle.',
                'long_desc_2' => 'He is incredibly interactive and enjoys playing fetch with crinkly paper balls.',
                'images' => ['/images/akiff1.jpg','/images/akiff2.jpg']
            ],
            'wuteh' => [
                'name' => 'Wuteh', 'gender' => 'Male', 'age' => '5 years', 'fee' => 'RM80',
                'short_desc' => 'The ultimate chill companion who loves quiet afternoons and soft beds.',
                'long_desc_1' => 'Wuteh is a serene 5-year-old male cat with a deeply soulful, soothing energy.',
                'long_desc_2' => 'He doesn’t care much for high-energy antics; instead, he prefers long afternoon naps.',
                'images' => ['/images/wuteh1.jpg','/images/wuteh2.jpg']
            ],
            'yoda' => [
                'name' => 'Yoda', 'gender' => 'Male', 'age' => '1 year', 'fee' => 'RM80',
                'short_desc' => 'A sweet young soul who expresses his love through gentle nose boops.',
                'long_desc_1' => 'Yoda is a sweet-tempered 1-year-old male cat who is looking for his lifelong best friend.',
                'long_desc_2' => 'Though he can be a little shy when first meeting new faces, his true colors emerge with a bit of patience.',
                'images' => ['/images/yoda1.jpg', '/images/yoda2.jpg']
            ]
        ];
    }

    // 1. Method for Gallery Page
    public function index()
    {
        $allCats = $this->getCatsData();
        return view('gallery', compact('allCats'));
    }

    // 2. Method for Individual Details Page
    public function show($id)
    {
        $allCats = $this->getCatsData();

        if (!array_key_exists($id, $allCats)) {
            abort(404);
        }

        $cat = $allCats[$id];
        return view('details', compact('cat'));
    }

    // 3. Method for Adoption Form Page
    public function createForm()
    {
        return view('adoption-form');
    }
}