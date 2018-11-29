<template>
  <canvas id="s-canvas" :width="canvasWidth" :height="canvasHeight" @click="refresh"></canvas>
</template>

<script>
export default {
  data () {
    return {
      canvasWidth: 110,
      canvasHeight: 32,
      maxColor: 240,
      minColor: 0,
      range: [1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']
    }
  },
  methods: {
    getRandom (min, max) {
      return Math.floor(Math.random() * (max - min)) + min
    },
    randomColor (min, max) {
      let r = this.getRandom(min, max)
      let g = this.getRandom(min, max)
      let b = this.getRandom(min, max)
      return `rgb(${r}, ${g}, ${b})`
    },
    drawLine (ctx) {
      for (let i = 0; i < 4; i++) {
        ctx.strokeStyle = this.randomColor(this.minColor, this.maxColor)
        ctx.beginPath()
        ctx.moveTo(this.getRandom(0, this.canvasWidth), this.getRandom(0, this.canvasHeight))
        ctx.lineTo(this.getRandom(this.canvasWidth - 10, this.canvasWidth), this.getRandom(0, this.canvasHeight))
        ctx.stroke()
      }
    },
    drawDot (ctx) {
      for (let i = 0; i < 50; i++) {
        ctx.fillStyle = this.randomColor(this.minColor, this.maxColor)
        ctx.beginPath()
        ctx.arc(this.getRandom(0, this.canvasWidth), this.getRandom(0, this.canvasHeight), 1, 0, 2 * Math.PI)
        ctx.fill()
      }
    },
    drawPic () {
      let canvas = document.getElementById('s-canvas')
      var ctx = canvas.getContext('2d')
      ctx.font = '25px Arial'
      let num = ''
      let code = ''
      let len = this.range.length
      for (let i = 0; i < 4; i++) {
        num = this.range[this.getRandom(0, len)]
        code += num
      }
      ctx.fillStyle = this.randomColor(this.minColor, this.maxColor)
      ctx.fillText(code, 15, 25)
      this.drawLine(ctx)
      this.drawDot(ctx)
      this.$emit('existCode', code)
    },
    refresh () {
      var canvas = document.getElementById('s-canvas')
      var cxt = canvas.getContext('2d')
      cxt.fillStyle = '#fff'
      cxt.beginPath()
      cxt.fillRect(0, 0, canvas.width, canvas.height)
      cxt.closePath()
      this.drawPic()
    }
  },
  mounted () {
    this.drawPic()
  }
}
</script>

<style scoped>
#s-canvas {
  letter-spacing: 5px;
  border: 1px solid #ddd;
  background: white;
}
</style>
