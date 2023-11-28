let greetBtn = document.querySelector('.box .greet .button')

greetBtn.addEventListener('click', () => {
  let greets = [
    'KR: 안녕하세요',
    'JP: こんにちは',
    'VN: Xin Chào',
    'ENG: Hello',
    'ES: Hola',
    'FR: Salut',
  ]

  let chosenGreetIndex = Math.floor(Math.random() * 6)

  let message = document.createElement('p')
  message.innerHTML = `${greets[chosenGreetIndex]}!`
  message.classList.add('message-line')
  if (chosenGreetIndex > 1) {
    message.style.fontFamily = 'var(--normal-font)'
  } else {
    if (chosenGreetIndex == 0) {
      message.style.fontFamily = 'var(--korea-font)'
    } else {
      message.style.fontFamily = 'var(--japan-font)'
    }
  }

  let messages = greetBtn.nextSibling.nextSibling
  messages.appendChild(message)
})
