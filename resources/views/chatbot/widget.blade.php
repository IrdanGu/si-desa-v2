{{-- Chatbot Widget - Layanan Informasi 24 Jam --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="chatbot-widget" class="chatbot-widget">
    {{-- Chat Toggle Button --}}
    <button id="chatbot-toggle" class="chatbot-toggle" aria-label="Buka chat">
        <span class="chatbot-toggle-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
        </span>
        <span class="chatbot-close-icon" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </span>
    </button>

    {{-- Chat Container --}}
    <div id="chatbot-container" class="chatbot-container" style="display: none;">
        {{-- Chat Header --}}
        <div class="chatbot-header">
            <div class="chatbot-header-info">
                <div class="chatbot-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" y1="19" x2="12" y2="23"></line>
                        <line x1="8" y1="23" x2="16" y2="23"></line>
                    </svg>
                </div>
                <div class="chatbot-title">
                    <h4>Asisten Desa</h4>
                    <span class="chatbot-status">
                        <span class="status-dot"></span>
                        Online 24 Jam
                    </span>
                </div>
            </div>
            <div class="chatbot-actions">
                <button id="chatbot-clear" class="chatbot-action-btn" title="Reset percakapan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 4 23 10 17 10"></polyline>
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                    </svg>
                </button>
                <button id="chatbot-minimize" class="chatbot-action-btn" title="Minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Chat Messages --}}
        <div id="chatbot-messages" class="chatbot-messages">
            {{-- Welcome Message --}}
            <div class="chat-message bot-message">
                <div class="message-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" y1="19" x2="12" y2="23"></line>
                        <line x1="8" y1="23" x2="16" y2="23"></line>
                    </svg>
                </div>
                <div class="message-content">
                    <div class="message-text">
                        <p>Selamat datang! 👋</p>
                        <p>Saya asisten virtual yang siap membantu Anda 24 jam.</p>
                        <p class="mt-2">Ada yang bisa saya bantu?</p>
                    </div>
                    <div class="message-time">{{ now()->format('H:i') }}</div>
                </div>
            </div>

            {{-- Quick Suggestions --}}
            <div class="chat-suggestions">
                <button class="suggestion-chip" data-message="Berita terbaru">📰 Berita</button>
                <button class="suggestion-chip" data-message="Agenda desa">📅 Agenda</button>
                <button class="suggestion-chip" data-message="Layanan surat">📋 Layanan</button>
                <button class="suggestion-chip" data-message="Produk UMKM">🛒 Produk</button>
            </div>
        </div>

        {{-- Chat Input --}}
        <div class="chatbot-input-area">
            <form id="chatbot-form" class="chatbot-form">
                @csrf
                <input type="text" id="chatbot-input" class="chatbot-input" 
                       placeholder="Ketik pesan Anda..." maxlength="500" autocomplete="off">
                <button type="submit" class="chatbot-send" aria-label="Kirim pesan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<style>
/* Chatbot Widget Styles */
.chatbot-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}

/* Toggle Button */
.chatbot-toggle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
    transition: all 0.3s ease;
}

.chatbot-toggle:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 25px rgba(102, 126, 234, 0.5);
}

.chatbot-toggle:active {
    transform: scale(0.95);
}

/* Chat Container */
.chatbot-container {
    position: absolute;
    bottom: 80px;
    right: 0;
    width: 380px;
    height: 550px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    animation: slideUp 0.3s ease;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Header */
.chatbot-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.chatbot-header-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.chatbot-avatar {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chatbot-title h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.chatbot-status {
    font-size: 12px;
    opacity: 0.9;
    display: flex;
    align-items: center;
    gap: 6px;
}

.status-dot {
    width: 8px;
    height: 8px;
    background: #4ade80;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.chatbot-actions {
    display: flex;
    gap: 8px;
}

.chatbot-action-btn {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
}

.chatbot-action-btn:hover {
    background: rgba(255, 255, 255, 0.3);
}

/* Messages Area */
.chatbot-messages {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
    background: #f8fafc;
}

.chat-message {
    display: flex;
    gap: 10px;
    margin-bottom: 16px;
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.bot-message {
    align-items: flex-start;
}

.user-message {
    align-items: flex-end;
    flex-direction: row-reverse;
}

.message-avatar {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.user-message .message-avatar {
    background: #3b82f6;
}

.message-content {
    max-width: 75%;
}

.message-text {
    padding: 12px 16px;
    border-radius: 18px;
    font-size: 14px;
    line-height: 1.5;
}

.bot-message .message-text {
    background: white;
    color: #1f2937;
    border-bottom-left-radius: 4px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.user-message .message-text {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-bottom-right-radius: 4px;
}

.message-text p {
    margin: 0 0 8px 0;
}

.message-text p:last-child {
    margin-bottom: 0;
}

.message-text p.mt-2 {
    margin-top: 8px;
}

.message-time {
    font-size: 11px;
    color: #9ca3af;
    margin-top: 4px;
    text-align: right;
}

.bot-message .message-time {
    text-align: left;
}

/* Suggestions */
.chat-suggestions {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 12px;
    padding-left: 42px;
}

.suggestion-chip {
    background: white;
    border: 1px solid #e5e7eb;
    color: #4b5563;
    padding: 8px 14px;
    border-radius: 20px;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.2s;
}

.suggestion-chip:hover {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

/* Input Area */
.chatbot-input-area {
    padding: 16px 20px;
    background: white;
    border-top: 1px solid #e5e7eb;
}

.chatbot-form {
    display: flex;
    gap: 10px;
}

.chatbot-input {
    flex: 1;
    border: 1px solid #e5e7eb;
    border-radius: 25px;
    padding: 12px 18px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.2s;
}

.chatbot-input:focus {
    border-color: #667eea;
}

.chatbot-send {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}

.chatbot-send:hover {
    transform: scale(1.05);
}

.chatbot-send:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

/* Typing Indicator */
.typing-indicator {
    display: flex;
    gap: 4px;
    padding: 12px 16px;
    background: white;
    border-radius: 18px;
    border-bottom-left-radius: 4px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.typing-indicator span {
    width: 8px;
    height: 8px;
    background: #d1d5db;
    border-radius: 50%;
    animation: typing 1.4s infinite;
}

.typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
.typing-indicator span:nth-child(3) { animation-delay: 0.4s; }

@keyframes typing {
    0%, 60%, 100% { transform: translateY(0); }
    30% { transform: translateY(-10px); }
}

/* Responsive */
@media (max-width: 480px) {
    .chatbot-widget {
        bottom: 15px;
        right: 15px;
    }
    
    .chatbot-container {
        width: calc(100vw - 30px);
        height: 70vh;
        right: 0;
        bottom: 75px;
    }
    
    .chatbot-toggle {
        width: 55px;
        height: 55px;
    }
}

/* Scrollbar */
.chatbot-messages::-webkit-scrollbar {
    width: 6px;
}

.chatbot-messages::-webkit-scrollbar-track {
    background: transparent;
}

.chatbot-messages::-webkit-scrollbar-thumb {
    background: #d1d5db;
    border-radius: 3px;
}

.chatbot-messages::-webkit-scrollbar-thumb:hover {
    background: #9ca3af;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const widget = document.getElementById('chatbot-widget');
    const toggle = document.getElementById('chatbot-toggle');
    const container = document.getElementById('chatbot-container');
    const minimize = document.getElementById('chatbot-minimize');
    const clear = document.getElementById('chatbot-clear');
    const form = document.getElementById('chatbot-form');
    const input = document.getElementById('chatbot-input');
    const messages = document.getElementById('chatbot-messages');
    
    let isOpen = false;
    let sessionId = localStorage.getItem('chatbot_session_id');
    
    // Toggle chat
    toggle.addEventListener('click', function() {
        isOpen = !isOpen;
        container.style.display = isOpen ? 'flex' : 'none';
        toggle.querySelector('.chatbot-toggle-icon').style.display = isOpen ? 'none' : 'block';
        toggle.querySelector('.chatbot-close-icon').style.display = isOpen ? 'block' : 'none';
        
        if (isOpen) {
            input.focus();
            loadHistory();
        }
    });
    
    // Minimize
    minimize.addEventListener('click', function() {
        isOpen = false;
        container.style.display = 'none';
        toggle.querySelector('.chatbot-toggle-icon').style.display = 'block';
        toggle.querySelector('.chatbot-close-icon').style.display = 'none';
    });
    
    // API URLs
    const CHATBOT_CHAT_URL = '/chatbot/chat';
    const CHATBOT_HISTORY_URL = '/chatbot/history';
    const CHATBOT_CLEAR_URL = '/chatbot/clear';
    
    // Get CSRF token
    function getCsrfToken() {
        const meta = document.querySelector('meta[name="csrf-token"]');
        return meta ? meta.content : '';
    }
    
    // Clear conversation
    clear.addEventListener('click', async function() {
        if (confirm('Reset percakapan?')) {
            await fetch(CHATBOT_CLEAR_URL, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Content-Type': 'application/json'
                }
            });
            
            localStorage.removeItem('chatbot_session_id');
            sessionId = null;
            messages.innerHTML = `
                <div class="chat-message bot-message">
                    <div class="message-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                            <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                            <line x1="12" y1="19" x2="12" y2="23"></line>
                            <line x1="8" y1="23" x2="16" y2="23"></line>
                        </svg>
                    </div>
                    <div class="message-content">
                        <div class="message-text">
                            <p>Percakapan telah direset. 👋</p>
                            <p>Ada yang bisa saya bantu?</p>
                        </div>
                        <div class="message-time">${getCurrentTime()}</div>
                    </div>
                </div>
                <div class="chat-suggestions">
                    <button class="suggestion-chip" data-message="Berita terbaru">📰 Berita</button>
                    <button class="suggestion-chip" data-message="Agenda desa">📅 Agenda</button>
                    <button class="suggestion-chip" data-message="Layanan surat">📋 Layanan</button>
                    <button class="suggestion-chip" data-message="Produk UMKM">🛒 Produk</button>
                </div>
            `;
            bindSuggestionChips();
        }
    });
    
    // Send message
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        const message = input.value.trim();
        if (!message) return;
        
        // Add user message
        addMessage(message, 'user');
        input.value = '';
        
        // Show typing indicator
        showTyping();
        
        try {
            const response = await fetch(CHATBOT_CHAT_URL, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    message: message,
                    session_id: sessionId
                })
            });
            
            const data = await response.json();
            
            // Hide typing
            hideTyping();
            
            if (data.success) {
                sessionId = data.session_id;
                localStorage.setItem('chatbot_session_id', sessionId);
                
                // Add bot response
                addMessage(data.data.text, 'bot', data.data.suggestions);
            }
        } catch (error) {
            hideTyping();
            console.error('Chatbot error:', error);
            addMessage('Maaf, terjadi kesalahan. Silakan coba lagi. (' + error.message + ')', 'bot');
        }
    });
    
    // Add message to chat
    function addMessage(text, role, suggestions = []) {
        const time = getCurrentTime();
        const isBot = role === 'bot';
        
        const messageHtml = `
            <div class="chat-message ${isBot ? 'bot-message' : 'user-message'}">
                <div class="message-avatar">
                    ${isBot ? `
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                            <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                            <line x1="12" y1="19" x2="12" y2="23"></line>
                            <line x1="8" y1="23" x2="16" y2="23"></line>
                        </svg>
                    ` : `
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    `}
                </div>
                <div class="message-content">
                    <div class="message-text">${formatMessage(text)}</div>
                    <div class="message-time">${time}</div>
                </div>
            </div>
        `;
        
        // Remove existing suggestions
        const existingSuggestions = messages.querySelector('.chat-suggestions');
        if (existingSuggestions) {
            existingSuggestions.remove();
        }
        
        messages.insertAdjacentHTML('beforeend', messageHtml);
        
        // Add suggestions if any
        if (suggestions && suggestions.length > 0) {
            const suggestionsHtml = `
                <div class="chat-suggestions">
                    ${suggestions.map(s => `<button class="suggestion-chip" data-message="${s}">${s}</button>`).join('')}
                </div>
            `;
            messages.insertAdjacentHTML('beforeend', suggestionsHtml);
            bindSuggestionChips();
        }
        
        scrollToBottom();
    }
    
    // Format message (convert markdown-like to HTML)
    function formatMessage(text) {
        return text
            .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
            .replace(/\[(.*?)\]\((.*?)\)/g, '<a href="$2" target="_blank" style="color: #667eea; text-decoration: underline;">$1</a>')
            .replace(/\n/g, '<br>');
    }
    
    // Show typing indicator
    function showTyping() {
        const typingHtml = `
            <div class="chat-message bot-message typing-message">
                <div class="message-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" y1="19" x2="12" y2="23"></line>
                        <line x1="8" y1="23" x2="16" y2="23"></line>
                    </svg>
                </div>
                <div class="typing-indicator">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        `;
        messages.insertAdjacentHTML('beforeend', typingHtml);
        scrollToBottom();
    }
    
    // Hide typing indicator
    function hideTyping() {
        const typing = messages.querySelector('.typing-message');
        if (typing) typing.remove();
    }
    
    // Scroll to bottom
    function scrollToBottom() {
        messages.scrollTop = messages.scrollHeight;
    }
    
    // Get current time
    function getCurrentTime() {
        return new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
    }
    
    // Bind suggestion chips
    function bindSuggestionChips() {
        document.querySelectorAll('.suggestion-chip').forEach(chip => {
            chip.addEventListener('click', function() {
                input.value = this.dataset.message;
                form.dispatchEvent(new Event('submit'));
            });
        });
    }
    
    // Load conversation history
    async function loadHistory() {
        if (!sessionId) return;
        
        try {
            const response = await fetch(`${CHATBOT_HISTORY_URL}?session_id=${sessionId}`);
            const data = await response.json();
            
            if (data.success && data.data.length > 0) {
                // Clear default welcome message
                messages.innerHTML = '';
                
                // Add history
                data.data.forEach(item => {
                    addMessage(item.message, item.role);
                });
            }
        } catch (error) {
            console.error('Failed to load history:', error);
        }
    }
    
    // Initial bind
    bindSuggestionChips();
});
</script>
