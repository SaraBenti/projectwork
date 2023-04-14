//tutto quello che deve fare il blocco ed è quasi tutto qui +
// 1 riga di php
( function ( blocks, element ) {
    var el = element.createElement;

    blocks.registerBlockType( 'imm-examples/example-01-basic', {
        edit: function () {//renderizza il blocco nell'editor
            return el( 'p', {}, 'Hello World (from the editor).' );
        },
        save: function () {//renderizza il blocco nel frontend
            return el( 'p', {}, 'Hola mundo (desde la interfaz).' );
        },
    } );
} )( window.wp.blocks, window.wp.element );//questo è il sistema per dirgli che i 2
//parametri di ingresso blocks e element sono in realtà
//window.wp.blocks ewindow.wp.element
