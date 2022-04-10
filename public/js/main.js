const slider = document.querySelector('.logos')
let isDown, startX, scrollLeft

slider.addEventListener('mousedown', (e) => {
    isDown = true
    slider.classList.add('active')
    startX = e.pageX - slider.offsetLeft
    scrollLeft = slider.scrollLeft
})

slider.addEventListener('mouseleave', () => {
    isDown = false
    slider.classList.remove('active')
})

slider.addEventListener('mouseup', () => {
    isDown = false
    slider.classList.remove('active')
})

slider.addEventListener('mousemove', (e) => {
    if (!isDown) return  //Frena la función
    e.preventDefault()
    
    const x = e.pageX - slider.offsetLeft
    const walk = (x - startX) * 0.8
    slider.scrollLeft = scrollLeft - walk
})