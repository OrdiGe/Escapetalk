
// const colors = ['#f23838', '#FF5A5A', '#FF7D7D', '#FF9C9C', '#FFBBBB']
// // const shapes = ['square', 'circle', 'triangle', 'heart']
// const shapes = ['square']

// const randomIntBetween = (min, max) => {
//   return Math.floor(Math.random() * (max - min + 1) + min)
// }

// class Particle {
//   constructor({ x, y, rotation, shape, color, size, duration, parent }) {
//     this.x = x
//     this.y = y
//     this.parent = parent
//     this.rotation = rotation
//     this.shape = shape
//     this.color = color
//     this.size = size
//     this.duration = duration
//     this.children = document.createElement('div')
//   }

//   draw() {
//     this.children.style.setProperty('--x', this.x + 'px')
//     this.children.style.setProperty('--y', this.y + 'px')
//     this.children.style.setProperty('--r', this.rotation + 'deg')
//     this.children.style.setProperty('--c', this.color)
//     this.children.style.setProperty('--size', this.size + 'px')
//     this.children.style.setProperty('--d', this.duration + 'ms')
//     this.children.className = `shape ${this.shape}`
//     this.parent.append(this.children)
//   }

//   animate() {
//     this.draw()
//     const timer = setTimeout(() => {
//       this.parent.removeChild(this.children)
//       clearTimeout(timer)
//     }, this.duration)
    
  

//   }
// }

// function animateParticles({ total }) {
//   for (let i = 0; i < total; i++) {
//     const particle = new Particle({
//       x: randomIntBetween(-100, 100),
//       y: randomIntBetween(0, -300),
//       rotation: randomIntBetween(-360 * 5, 360 * 5),
//       shape: shapes[randomIntBetween(0, shapes.length - 1)],
//       color: colors[randomIntBetween(0, colors.length - 1)],
//       size: randomIntBetween(4, 7),
//       duration: 500,
//       parent
//     })
//     particle.animate()
//     console.log(particle)
//   }
// }

// u('.claimable').each(function(elem) {
//   elem.addEventListener('click', e => {
//     parent = u('.claimable').first();
//     animateParticles({ total: 40 })
//   }
//  )
// });

// u('.claim-all').each(function(elem) {
//   elem.addEventListener('click', e => {
//     parent = u('.claim-all');
//     animateParticles({ total: 40 })
//   }
//  )
// });


const colors = ['#f23838', '#FF5A5A', '#FF7D7D', '#FF9C9C', '#FFBBBB']
// const shapes = ['square', 'circle', 'triangle', 'heart']
const shapes = ['circle', 'square']

const randomIntBetween = (min, max) => {
  return Math.floor(Math.random() * (max - min + 1) + min)
}

class Particle {
  constructor({ x, y, rotation, shape, color, size, duration, parent }) {
    this.x = x
    this.y = y
    this.parent = parent
    this.rotation = rotation
    this.shape = shape
    this.color = color
    this.size = size
    this.duration = duration
    this.children = document.createElement('div')
  }

  draw() {
    this.children.style.setProperty('--x', this.x + 'px')
    this.children.style.setProperty('--y', this.y + 'px')
    this.children.style.setProperty('--r', this.rotation + 'deg')
    this.children.style.setProperty('--c', this.color)
    this.children.style.setProperty('--size', this.size + 'px')
    this.children.style.setProperty('--d', this.duration + 'ms')
    this.children.className = `shape ${this.shape}`
    this.parent.append(this.children)
  }

  animate() {
    this.draw()

    const timer = setTimeout(() => {
      this.parent.removeChild(this.children)
      clearTimeout(timer)
    }, this.duration)
    }
}

function animateParticles({ total }) {
  for (let i = 0; i < total; i++) {
    const particle = new Particle({
      x: randomIntBetween(-100, 100),
      y: randomIntBetween(0, -300),
      rotation: randomIntBetween(-360 * 5, 360 * 5),
      shape: shapes[randomIntBetween(0, shapes.length - 1)],
      color: colors[randomIntBetween(0, colors.length - 1)],
      size: randomIntBetween(4, 7),
      duration: 500,
      parent
    })
    particle.animate()

  }
}

u('.claimable').each(function(elem) {
  elem.addEventListener('click', e => {
    parent = e.target;
      
    animateParticles({ total: 40 })
  }
 )
});

u('.claim-all').each(function(elem) {
  elem.addEventListener('click', e => {
    parent = e.target;
      
    animateParticles({ total: 40 })
  }
 )
});
