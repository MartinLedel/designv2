<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Lek med MD",
            "url" => "test",
            "title" => "Skriva lite text med Markdown.",
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporter för olika hemsidor.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom04",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport för kmom05.",
                    ],
                    [
                        "text" => "Kmom06.1",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport för kmom06.",
                    ],
                    [
                        "text" => "Kmom06.2",
                        "url" => "rapport/designelement",
                        "title" => "Rapport för kmom06.",
                    ],
                    [
                        "text" => "Kmom06.3",
                        "url" => "rapport/designprinciper",
                        "title" => "Rapport för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Rapport för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Bloggen",
            "url" => "blogg/index",
            "title" => "Dagens Bild.",
        ],
    ],
];
