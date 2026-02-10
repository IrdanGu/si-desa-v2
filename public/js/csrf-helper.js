// CSRF Token Helper for SIDESA Application

/**
 * Get CSRF token from meta tag
 */
function getCSRFToken() {
    const token = document.querySelector('meta[name="csrf-token"]');
    if (token) {
        return token.getAttribute("content");
    }
    console.warn("CSRF token not found in meta tag");
    return null;
}

/**
 * Setup CSRF token for all fetch requests
 */
function setupCSRFForFetch() {
    const originalFetch = window.fetch;
    window.fetch = function (url, options = {}) {
        const token = getCSRFToken();
        if (token) {
            options.headers = {
                ...options.headers,
                "X-CSRF-TOKEN": token,
                "X-Requested-With": "XMLHttpRequest",
            };
        }
        return originalFetch(url, options);
    };
}

/**
 * Setup CSRF token for jQuery AJAX requests
 */
function setupCSRFForJQuery() {
    if (typeof $ !== "undefined") {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": getCSRFToken(),
                "X-Requested-With": "XMLHttpRequest",
            },
        });
    }
}

/**
 * Add CSRF token to all forms that don't have it
 */
function addCSRFToForms() {
    const token = getCSRFToken();
    if (!token) return;

    // Find all forms that need CSRF tokens
    const forms = document.querySelectorAll(
        'form[method="POST"], form[method="PUT"], form[method="PATCH"], form[method="DELETE"]'
    );

    forms.forEach((form) => {
        // Check if form already has CSRF token
        const hasCSRF = form.querySelector('input[name="_token"]');
        if (!hasCSRF) {
            const csrfInput = document.createElement("input");
            csrfInput.type = "hidden";
            csrfInput.name = "_token";
            csrfInput.value = token;
            form.appendChild(csrfInput);
        }
    });
}

/**
 * Initialize all CSRF protections
 */
function initCSRF() {
    setupCSRFForFetch();
    setupCSRFForJQuery();
    addCSRFToForms();

    // Re-add CSRF to dynamically created forms
    const observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            mutation.addedNodes.forEach(function (node) {
                if (node.nodeType === 1 && node.tagName === "FORM") {
                    addCSRFToForms();
                }
            });
        });
    });

    observer.observe(document.body, { childList: true, subtree: true });
}

// Auto-initialize when DOM is ready
document.addEventListener("DOMContentLoaded", initCSRF);

// Export for manual use
window.SIDESA_CSRF = {
    getToken: getCSRFToken,
    initCSRF: initCSRF,
    setupFetch: setupCSRFForFetch,
    setupJQuery: setupCSRFForJQuery,
    addToForms: addCSRFToForms,
};
