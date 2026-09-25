/**
 * Dra. Débora Almeida — Odontologia em Petrolina
 * JavaScript Puro (Vanilla JS) — Leve, Acessível e Confiável
 * 
 * Funcionalidades:
 * - Abertura e fechamento acessível do menu móvel (Escape, backdrop, retenção de foco)
 * - Transição suave de elevação do cabeçalho ao rolar a página
 * - Comportamento harmônico de acordeão para FAQs (<details>)
 * - Preservação integral de navegação e leitura sem JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initFaqAccordion();
});

/**
 * Adiciona sombra e leve compactação ao cabeçalho ao rolar a página
 */
function initHeaderScroll() {
    const header = document.getElementById('site-header');
    if (!header) return;

    let ticking = false;

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                if (window.scrollY > 20) {
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.remove('is-scrolled');
                }
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    // Executa verificação inicial caso a página recarregue já rolada
    onScroll();
}

/**
 * Gerencia o menu móvel com suporte completo a acessibilidade (WAI-ARIA e teclado)
 */
function initMobileMenu() {
    const toggleBtn = document.getElementById('menu-toggle');
    const closeBtn = document.getElementById('mobile-menu-close');
    const menu = document.getElementById('mobile-menu');
    const backdrop = document.getElementById('mobile-menu-backdrop');

    if (!toggleBtn || !menu || !backdrop) return;

    function openMenu() {
        toggleBtn.setAttribute('aria-expanded', 'true');
        menu.classList.add('is-active');
        backdrop.classList.add('is-active');
        menu.setAttribute('aria-hidden', 'false');
        backdrop.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        // Foco acessível no botão de fechar quando o menu abre
        if (closeBtn) {
            setTimeout(() => closeBtn.focus(), 50);
        }
    }

    function closeMenu() {
        toggleBtn.setAttribute('aria-expanded', 'false');
        menu.classList.remove('is-active');
        backdrop.classList.remove('is-active');
        menu.setAttribute('aria-hidden', 'true');
        backdrop.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';

        // Retorna o foco para o botão que abriu o menu
        toggleBtn.focus();
    }

    toggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const isOpen = toggleBtn.getAttribute('aria-expanded') === 'true';
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            closeMenu();
        });
    }

    backdrop.addEventListener('click', closeMenu);

    // Fechamento e navegação por teclado dentro do menu móvel
    document.addEventListener('keydown', (e) => {
        if (!menu.classList.contains('is-active')) return;

        if (e.key === 'Escape') {
            closeMenu();
            return;
        }

        // Retenção de foco (Focus Trap acessível)
        if (e.key === 'Tab') {
            const focusableElements = menu.querySelectorAll(
                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
            );
            if (focusableElements.length === 0) return;

            const firstElement = focusableElements[0];
            const lastElement = focusableElements[focusableElements.length - 1];

            if (e.shiftKey && document.activeElement === firstElement) {
                e.preventDefault();
                lastElement.focus();
            } else if (!e.shiftKey && document.activeElement === lastElement) {
                e.preventDefault();
                firstElement.focus();
            }
        }
    });

    // Fechar gaveta ao clicar em qualquer link de navegação
    const mobileLinks = menu.querySelectorAll('.mobile-nav-link');
    mobileLinks.forEach((link) => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });
}

/**
 * Aperfeiçoamento de acordeão para FAQs (<details>):
 * Fecha automaticamente itens adjacentes ao abrir uma nova dúvida.
 */
function initFaqAccordion() {
    const accordions = document.querySelectorAll('.faq-accordion');
    accordions.forEach((accordion) => {
        const items = accordion.querySelectorAll('.faq-item');
        items.forEach((item) => {
            item.addEventListener('toggle', () => {
                if (item.open) {
                    items.forEach((otherItem) => {
                        if (otherItem !== item && otherItem.open) {
                            otherItem.removeAttribute('open');
                        }
                    });
                }
            });
        });
    });
}
