import { Conversation } from '@elevenlabs/client';

const textInput = document.getElementById('message-input');
const loadingMessage = document.getElementById('loading-message');

async function startTextConversation() {
    const conversation = await Conversation.startSession({
        agentId: 'agent_5301k5e113dfe5m82ycgkb6ygzq9',
        overrides: {
            conversation: {
                textOnly: true
            }
        },
        textOnly: true,
        onMessage: (message) => {
            if(window.isInitialMessage){
                window.isInitialMessage = false;
                return;
            }
            console.log({message});
            window.renderSalesRepMessage(message.message);
            window.scrollToBottom();
            loadingMessage?.classList?.add('hidden');
        },
        onDisconnect: () => {
            console.log('Disconnected');
            if(window) {
                window.location.reload();
            window.textConversation = null;

            }
        },
        onError: (error) => {
            console.error({AgentError: error});
            if(window) window.location.reload();
        },
        onConnect: () => {
            console.log('Connected');
        },
        dynamicVariables: {
            programName: "Cornell AI",
            cohortId: "cornell-caio-cohort-2"
        },
    });

    window.textConversation = conversation;

    textInput.addEventListener('keydown', async (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            const resp = await conversation.sendUserMessage(textInput.value);
            console.log(resp);
        }
    });
}

window.startTextConversation = startTextConversation;