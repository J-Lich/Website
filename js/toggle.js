function toggle() {
  document.getElementById('toggle').classList.toggle("hide")

  document.getElementById('toggle1').classList.add("hide")
  document.getElementById('toggle2').classList.add("hide")
  document.getElementById('toggle3').classList.add("hide")
}

function toggle1() {
  document.getElementById('toggle1').classList.toggle("hide")

  document.getElementById('toggle').classList.add("hide")
  document.getElementById('toggle2').classList.add("hide")
  document.getElementById('toggle3').classList.add("hide")
}

function toggle2() {
  document.getElementById('toggle2').classList.toggle("hide")

  document.getElementById('toggle').classList.add("hide")
  document.getElementById('toggle1').classList.add("hide")
  document.getElementById('toggle3').classList.add("hide")
}

function toggle3() {
  document.getElementById('toggle3').classList.toggle("hide")

  document.getElementById('toggle').classList.add("hide")
  document.getElementById('toggle1').classList.add("hide")
  document.getElementById('toggle2').classList.add("hide")
}
