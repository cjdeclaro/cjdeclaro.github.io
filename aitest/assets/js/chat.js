const apiKey = '';
const apiUrl = 'https://api.openai.com/v1/chat/completions';

const message = {
  model: 'gpt-3.5-turbo',  // or 'gpt-4' if you have access
  messages: [{ role: 'user', content: 'Hello, ChatGPT!' }]
};

fetch(apiUrl, {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${apiKey}`
  },
  body: JSON.stringify(message)
})
.then(response => response.json())
.then(data => {
  console.log(data.choices[0].message.content);  // Log the response from the API
})
.catch(error => {
  console.error('Error:', error);
});
