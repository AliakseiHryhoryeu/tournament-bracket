let screen1 = document.getElementById('screen1')

let activeScreen1 = true

let startTournament = document.getElementById('startTournament')
let goBack = document.getElementById('goBack')
startTournament.addEventListener('click', () => changeScreen())
goBack.addEventListener('click', () => changeScreen())
const changeScreen = () => {
	if (activeScreen1) {
		screen1.style.marginTop = '-100vh'
	} else {
		screen1.style.marginTop = ''
	}
	activeScreen1 = !activeScreen1
}
