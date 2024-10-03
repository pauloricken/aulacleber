<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árvore Recursiva</title>
</head>
<body>

<h1>ex10</h1>

<?php
// Cada elemento pode ter filhos, e esses filhos são arrays vazios ou outros arrays que temm mais elementos.
$tree = [
    'Root' => [                 
        'Node1' => [            
            'Node1.1' => [],    
            'Node1.2' => []     
        ],
        'Node2' => [            
            'Node2.1' => [      
                'Node2.1.1' => []
            ],
            'Node2.2' => []     
        ]
    ]
];

// Função recursiva para exibir a árvore
// Aqui, a função exibe cada nó  da árvore e, se esse nó tiver filhos, ela chama a si mesma para exibir os filhos.
function exibirArvore($nodes) {

    echo "<ul>";
    
    // vai percorer cada nó  da árvore
    foreach ($nodes as $key => $child) {
        // Exibe o nome do nó ) como um item em forma de lista
        echo "<li>" . $key . "</li>";
        
        // Se esse nó tiver filhos (se o array $child não for vazio), chama a função novamente
        if (!empty($child)) {
            exibirArvore($child);  // Aonde a recursão acontece, chamando a função para exibir os filhos
        }
    }
    echo "</ul>";
}

// Chama função para exibir a árvore completa, começando pela raiz que foi denomida - ($tree)
exibirArvore($tree);
?>

</body>
</html>
