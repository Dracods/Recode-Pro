<?php
    /* Chave valor(index customizado) */
    $tecnologias = [
        "js"        =>"Uma tecnologia usada principalmente no Front-end", 
        "c#"        =>"Utilizada na unity",
        "c"         =>"Linguagem antiga e arcaica, utilizada se possivel fuja sempre que possivel",
        "golang"    =>"Linguagem feita pelo Google, não possuo muitas informações sobre ela",
        "c++"       =>"Linguagem baseada no C, continua arcaica, mas da pra relevar"
    ];

    echo $tecnologias[strtolower("goLang")];

