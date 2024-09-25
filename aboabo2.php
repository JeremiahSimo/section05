<style>
.my-loader {
  width: 200px;
  height: 200px;
  perspective: 1000px;
  margin: 100px auto;
}

.rubiks-cube {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  animation: my-rotateCube 5s infinite linear;
}

.my-loader .face {
  position: absolute;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  height: 100%;
}

.my-loader .face.front {
  transform: translateZ(100px);
}
.my-loader .face.back {
  transform: rotateY(180deg) translateZ(100px);
}
.my-loader .face.left {
  transform: rotateY(-90deg) translateZ(100px);
}
.my-loader .face.right {
  transform: rotateY(90deg) translateZ(100px);
}
.my-loader .face.top {
  transform: rotateX(90deg) translateZ(100px);
}
.my-loader .face.bottom {
  transform: rotateX(-90deg) translateZ(100px);
}

.my-loader .cube {
  width: calc(100% / 3);
  height: calc(100% / 3);
  box-sizing: border-box;
  border: 1px solid #000;
}

@keyframes my-rotateCube {
  0% {
    transform: rotateX(0deg) rotateY(0deg);
  }
  100% {
    transform: rotateX(360deg) rotateY(360deg);
  }
}

</style>

<div class="my-loader">
  <div class="rubiks-cube">
    <div class="face front">
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
    </div>

    <div class="face back">
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
    </div>
    <div class="face left">
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
    </div>
    <div class="face right">
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
    </div>
    <div class="face top">
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
    </div>
    <div class="face bottom">
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
      <div style="background: #ffeb3b;" class="cube"></div>
      <div style="background: #4caf50;" class="cube"></div>
      <div style="background: #2196f3;" class="cube"></div>
      <div style="background: #ffffff;" class="cube"></div>
      <div style="background: #ff3d00;" class="cube"></div>
    </div>
  </div>
</div>
