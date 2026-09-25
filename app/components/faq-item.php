<?php
declare(strict_types=1);

/**
 * Componente: Item de Pergunta Frequente (FAQ)
 * 
 * Utiliza o elemento semântico <details> e <summary> para acessibilidade nativa,
 * funcionando perfeitamente mesmo sem JavaScript.
 * 
 * @param array $faq Array com 'question' e 'answer'
 * @param int $index Índice numérico para identificação
 */
?>
<details class="faq-item" id="faq-item-<?= (int)$index ?>">
    <summary class="faq-summary">
        <span class="faq-question-text"><?= e($faq['question']) ?></span>
        <span class="faq-toggle-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </summary>
    <div class="faq-content">
        <p class="faq-answer-text"><?= e($faq['answer']) ?></p>
    </div>
</details>

