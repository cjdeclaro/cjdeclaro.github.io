// create scene
const scene = new THREE.Scene();

// create camera
const camera = new THREE.PerspectiveCamera(50, 2 / 1, 0.1, 1000);
camera.position.z = 10;

// render scene
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

// create 3D object(s)
const geometry = new THREE.CylinderBufferGeometry(2, 2, 7, 50);
const material = new THREE.MeshBasicMaterial({
  color: '#8bc34a',
  wireframe: true
});
const cylinder = new THREE.Mesh(geometry, material);

// add object(s) to scene
scene.add(cylinder);

// animate object(s)
const animate = () => {
  requestAnimationFrame(animate);

  cylinder.rotation.x += 0.01;
  cylinder.rotation.y += 0.01;

  renderer.render(scene, camera);
};

// call animate to display
animate();
