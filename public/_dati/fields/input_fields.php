<?php

$fields = [
    [
        [
            'type' => 'text',
            'id' => 'username',
            'label' => 'Username',
            'value' => '',
            'placeholder' => 'Inserisci il tuo username',
            'required' => true,
            'readonly' => false,
            'disabled' => false,
            'maxlength' => '20',
            'minlength' => '5',
            'pattern' => '[a-zA-Z0-9_]+',
            'autocomplete' => 'off',
            'js_functions' => [
                'onclick' => 'handleClick()',
                'onchange' => 'handleChange()'
            ],
            'feedback' => 'Il campo username è obbligatorio.'
        ],
        [
            'type' => 'password',
            'id' => 'password',
            'label' => 'Password',
            'value' => '',
            'placeholder' => 'Inserisci la tua password',
            'required' => true,
            'readonly' => false,
            'disabled' => false,
            'maxlength' => '30',
            'minlength' => '8',
            'autocomplete' => 'new-password',
            'js_functions' => [
                'onfocus' => 'handleFocus()'
            ],
            'feedback' => 'La password deve avere almeno 8 caratteri.'
        ]
    ],
    [
        [
            'type' => 'select',
            'id' => 'country',
            'label' => 'Paese',
            'value' => '',
            'required' => true,
            'disabled' => false,
            'js_functions' => [
                'onchange' => 'handleCountryChange()'
            ],
            'options' => [
                'IT' => 'Italia',
                'FR' => 'Francia',
                'ES' => 'Spagna'
            ]
        ],
        [
            'type' => 'textarea',
            'id' => 'bio',
            'label' => 'Biografia',
            'value' => '',
            'placeholder' => 'Scrivi una breve biografia',
            'maxlength' => '500',
            'minlength' => '50',
            'js_functions' => [
                'onfocus' => 'handleTextareaFocus()'
            ],
            'feedback' => 'La biografia deve essere lunga almeno 50 caratteri.'
        ]
    ],
    [
        [
            'type' => 'checkbox',
            'id' => 'accept_terms',
            'label' => 'Accetto i termini e le condizioni',
            'value' => '',
            'required' => true,
            'js_functions' => [
                'onclick' => 'handleTermsClick()'
            ]
        ],
        [
            'type' => 'submit',
            'id' => 'submit_button',
            'label' => '',
            'value' => 'Invia',
            'disabled' => false,
            'js_functions' => [
                'onclick' => 'handleSubmit()'
            ]
        ]
    ]
];
