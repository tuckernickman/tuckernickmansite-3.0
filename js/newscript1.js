let morph;

function preload() {
  // Load model with normalise parameter set to true
  morph = loadModel('NF56.1.1.2.obj');
}

function setup() {
  createCanvas(x, y, WEBGL);
}

function draw() {
  background(0);
  scale(0.4); // Scaled to make model fit into canvas
  rotateX(frameCount * 0.01);
  rotateY(frameCount * 0.01);
  normalMaterial(); // For effect
  model(morph);
}