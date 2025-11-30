<?php

namespace Models;

require_once('libraries/autoload.php');

class Citation extends Model
{
    private $citations = [
        'marvel' => [
            [
                'name_photo' => 'ironman',
                'auteur' => 'Tony Stark',
                'title' => 'Iron Man',
                'citation' => 'Je suis Iron Man.'
            ],
            [
                'name_photo' => 'spider_man',
                'auteur' => 'Peter Parker',
                'title' => 'Spider-Man',
                'citation' => 'Un grand pouvoir implique de grandes responsabilités.'
            ],
            [
                'name_photo' => 'black_panther',
                'auteur' => 'T\'Challa',
                'title' => 'Black Panther',
                'citation' => 'Wakanda Forever!'
            ],
            [
                'name_photo' => 'black_widow',
                'auteur' => 'Natasha Romanoff',
                'title' => 'Black Widow',
                'citation' => 'Je me suis entraînée toute ma vie pour ça.'
            ],
            [
                'name_photo' => 'doctor_strange',
                'auteur' => 'Doctor Strange',
                'title' => 'Doctor Strange',
                'citation' => 'Nous sommes dans le jeu final maintenant.'
            ]
        ],
        'dc' => [
            [
                'name_photo' => 'batman',
                'auteur' => 'Bruce Wayne',
                'title' => 'Batman',
                'citation' => 'Je suis Batman.'
            ],
            [
                'name_photo' => 'harley-quinn',
                'auteur' => 'Harley Quinn',
                'title' => 'Suicide Squad',
                'citation' => 'Nous sommes les méchants, c\'est ce qu\'on fait.'
            ],
            [
                'name_photo' => 'arrow',
                'auteur' => 'Oliver Queen',
                'title' => 'Arrow',
                'citation' => 'Mon nom est Oliver Queen.'
            ]
        ],
        'anime' => [
            [
                'name_photo' => 'itachi',
                'auteur' => 'Itachi Uchiha',
                'title' => 'Naruto',
                'citation' => 'Ceux qui pardonnent et acceptent sont vraiment forts.'
            ],
            [
                'name_photo' => 'gaara',
                'auteur' => 'Gaara',
                'title' => 'Naruto',
                'citation' => 'Un Jinchūriki qui ne peut contrôler son pouvoir ne mérite pas d\'exister.'
            ]
        ],
        'disney' => [
            [
                'name_photo' => 'mufasa',
                'auteur' => 'Mufasa',
                'title' => 'Le Roi Lion',
                'citation' => 'Souviens-toi qui tu es.'
            ],
            [
                'name_photo' => 'olaf',
                'auteur' => 'Olaf',
                'title' => 'La Reine des Neiges',
                'citation' => 'Certaines personnes valent qu\'on fonde pour elles.'
            ]
        ],
        'musique' => [
            [
                'name_photo' => 'd.aceM',
                'auteur' => 'Maître Gims',
                'title' => 'Sexion d\'Assaut',
                'citation' => 'Avant qu\'ils ferment le rideau.'
            ],
            [
                'name_photo' => 'sexion',
                'auteur' => 'Sexion d\'Assaut',
                'title' => 'L\'école des points vitaux',
                'citation' => 'Wati B, on est chauds comme jamais.'
            ]
        ]
    ];

    public function findTypes(string $cate): array
    {
        if (isset($this->citations[$cate])) {
            return $this->citations[$cate];
        }
        return [];
    }
}
