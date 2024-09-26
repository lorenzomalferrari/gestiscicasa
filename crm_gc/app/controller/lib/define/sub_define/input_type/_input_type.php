<?php declare(strict_types=1);

    define('INPUT_TYPE', [
        'edit_key' => [
            'page' => 'page',
            'parent_path_key' => 'parent_path_key',
            'parent' => 'parent',
            'tableName' => 'tableName',
            'input_fields' => 'input_fields',
            'breadcrumb_list' => 'breadcrumb_list',
            'id' => 'id',
            'icon' => 'icon',
            'entity' => 'entity',
        ],
        'elements' => [
            "input" => [
                "text" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "maxlength",
                        "minlength",
                        "pattern",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="text" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "password" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "maxlength",
                        "minlength",
                        "pattern",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="password" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "email" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "maxlength",
                        "minlength",
                        "pattern",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="email" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "number" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "maxlength",
                        "minlength",
                        "min",
                        "max",
                        "step",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="number" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" min="" max="" step="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "range" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "min",
                        "max",
                        "step",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="range" id="" class="" name="" value="" placeholder="" required readonly disabled min="" max="" step="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "tel" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "maxlength",
                        "minlength",
                        "pattern",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="tel" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "url" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "placeholder",
                        "required",
                        "readonly",
                        "disabled",
                        "maxlength",
                        "minlength",
                        "pattern",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="url" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "date" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "min",
                        "max",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="date" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "time" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "min",
                        "max",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="time" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "datetime-local" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "min",
                        "max",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="datetime-local" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "month" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "min",
                        "max",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="month" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "week" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "min",
                        "max",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="week" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "color" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "autocomplete",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange",
                        "onfocus",
                        "onblur"
                    ],
                    "model" => '<input type="color" id="" class="" name="" value="" required readonly disabled autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
                ],
                "checkbox" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange"
                    ],
                    "model" => '<input type="checkbox" id="" class="" name="" value="" required readonly disabled onclick="" onchange="">'
                ],
                "radio" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "required",
                        "readonly",
                        "disabled",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange"
                    ],
                    "model" => '<input type="radio" id="" class="" name="" value="" required readonly disabled onclick="" onchange="">'
                ],
                "file" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "required",
                        "disabled",
                        "multiple",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick",
                        "onchange"
                    ],
                    "model" => '<input type="file" id="" class="" name="" required disabled multiple onclick="" onchange="">'
                ],
                "hidden" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "custom" => []
                    ],
                    "model" => '<input type="hidden" id="" class="" name="" value="">'
                ]
            ],
            "textarea" => [
                "attributes" => [
                    "id",
                    "name",
                    "class",
                    "value",
                    "placeholder",
                    "required",
                    "readonly",
                    "disabled",
                    "maxlength",
                    "minlength",
                    "custom" => []
                ],
                "js_functions" => [
                    "onclick",
                    "onchange",
                    "onfocus",
                    "onblur"
                ],
                "model" => '<textarea id="" class="" name="" placeholder="" required readonly disabled maxlength="" minlength="" onclick="" onchange="" onfocus="" onblur=""></textarea>'
            ],
            "select" => [
                "attributes" => [
                    "id",
                    "name",
                    "class",
                    "required",
                    "disabled",
                    "multiple",
                    "custom" => []
                ],
                "js_functions" => [
                    "onclick",
                    "onchange"
                ],
                "model" => '<select id="" class="" name="" required disabled multiple onclick="" onchange=""></select>'
            ],
            "button" => [
                "submit" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "disabled",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick"
                    ],
                    "model" => '<button type="submit" id="" class="" name="" value="" disabled onclick=""></button>'
                ],
                "reset" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "value",
                        "disabled",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick"
                    ],
                    "model" => '<button type="reset" id="" class="" name="" value="" disabled onclick=""></button>'
                ],
                "button" => [
                    "attributes" => [
                        "id",
                        "name",
                        "class",
                        "type",
                        "value",
                        "disabled",
                        "custom" => []
                    ],
                    "js_functions" => [
                        "onclick"
                    ],
                    "model" => '<button type="button" id="" class="" name="" type="" value="" disabled onclick=""></button>'
                ]
            ],
            "datalist" => [
                "attributes" => [
                    "id",
                    "class",
                    "custom" => []
                ],
                "model" => '<datalist id="" class="" onclick="" onchange=""></datalist>'
            ],
            "output" => [
                "attributes" => [
                    "id",
                    "name",
                    "class",
                    "custom" => []
                ],
                "js_functions" => [
                    "onclick"
                ],
                "model" => '<output id="" class="" name="" onclick=""></output>'
            ],
            "meter" => [
                "attributes" => [
                    "id",
                    "name",
                    "class",
                    "value",
                    "min",
                    "max",
                    "low",
                    "high",
                    "optimum",
                    "custom" => []
                ],
                "js_functions" => [
                    "onclick"
                ],
                "model" => '<meter id="" class="" name="" value="" min="" max="" low="" high="" optimum="" onclick=""></meter>'
            ],
            "progress" => [
                "attributes" => [
                    "id",
                    "value",
                    "class",
                    "max",
                    "custom" => []
                ],
                "js_functions" => [
                    "onclick"
                ],
                "model" => '<progress id="" class="" value="" max="" onclick=""></progress>'
            ]
        ],
    ]);
